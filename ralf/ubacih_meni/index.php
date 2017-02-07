<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="css1.css">
    <title> ETF Alumni </title>
</head>
<body>
    <div class = "header">
        <div id = "logo"> <img src = "logo4.gif" alt="logo" style = "width:130px"> </div>
		
        <p >
            <span id="header">Alumni ETF-a</span>
        </p>
	<div class="clear"></div>
	
	<div id="navigacija">
            <ul class="navigacija-lista">
                <li class="btn-menu"> <a href="index.php" class="btn-color">Pocetna stranica</a></li>
                <li class="btn-menu"> <a href="registracija.php" class="btn-color">Registracija</a></li>
                <li class="btn-menu"> <a href="uloguj_se.php" class="btn-color">Log in</a></li>
                <li class="padajuci_meni"> 
                    <span class="padajuci_meni_dugme">  Meni </span>
                    <div class="padajuci_meni_sadrzaj">
                        <a href="pretraga_clanova.php">Pronadji clanove</a>
                        <!-- Mogucnosti koje su dostupne samo adminu ili delegatima -->
                        <?php
                        if ($_SESSION['korisnicko_ime']!=""){
                            if ($_SESSION['tip_korisnika'] === "a" || $_SESSION['je_delegat'] == 1){
                                echo "<a href='zahtev_registracije.php'> Odobri zahteve za registraciju </a> <br>";
                                echo "<a href='prijavi_dogadjaj.php'> Prijavi vest ili dogadjaj </a>";
                            }
                            if ($_SESSION['tip_korisnika'] === "a"){
                                echo "<a href='odobri_vest.php' style='text-decoration:none'> Odobri vesti </a> <br>";
                            }
                            echo "<a href='uplati.php?offset=0' style='text-decoration:none' >".'Izvrsi uplatu'."</a><br>";
                        }
                        ?>
                        <a href="izloguj_se.php">Log out</a>
                    </div>
                </li>
            </ul>
	</div>
		
    </div>
    
    <div class="main-div">
<?php
    if ($_SESSION['korisnicko_ime']!=""){
        echo "<a href='korisnicki_profil.php' style='font-size:25px; text-decoration:none; color:black;' >".$_SESSION['korisnicko_ime']."</a><br><br>";
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "abrakadabra";
    $database = "etf_alumni";
    // Konekcija sa bazom
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Provera konekcije
    if (!$conn) {
        echo "<br>ERRNO: " . mysqli_connect_errno() . "<br>";
        die("Connection failed: " . mysqli_connect_error()); /* not good to use die */
    }

    $sql = "SELECT slika FROM korisnici WHERE korisnicko_ime='".$_SESSION['korisnicko_ime']."'";
    if (!$res=mysqli_query($conn,$sql)){
        die("Connection failed: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($res)===1){
        $array=mysqli_fetch_array($res);
        $slika=$array['slika'];
        echo "<br>";
        echo '<img src="data:image/png;base64,'.base64_encode($slika).'" style="width:200px; heiht:200px;">';
    }
    
    echo "<br>";
    $sql = "SELECT * FROM vesti WHERE odobrena=1 ORDER BY vreme_postavljanja";
    $res = mysqli_query($conn,$sql) or die("Greska pri konekciji sa bazom<br>".mysqli_error($conn));
    if (mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_array($res)){
            echo "<a href='vidi_vest.php?id=".$row['id']."'>".$row['naslov']."</a><br><br>";
        }
    }
?>

    </div>
</body>
</html>
