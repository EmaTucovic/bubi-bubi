<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="css1.css">
    <title> Vest </title>
</head>
<body>
    <div class = "header">
		<div id = "logo"> <img src = "logo4.gif" alt="logo" style = "width:130px"> </div>
		
			<p ><span id="header">Alumni ETF-a</span>
		
		
		</p>
	
	<div class="clear"></div>
	
	<div id="navigacija">
		<ul class="navigacija-lista">
		<li class="btn-menu"> <a href="#" class="btn-color">Pocetna stranica</a></li>
		<li class="btn-menu"> <a href="#" class="btn-color">Registracija</a></li>
		<li class="btn-menu"> <a href="#" class="btn-color">Log in</a></li>
		</ul>
	</div>
		
    </div>
	
	<div class="main-div">
	
            <div id="cela_vest">
                <form action="" method="post" name="odaberi_vest" id="odaberi_vest">
                    <?php
                    // Konekcija sa bazom
                    $conn = mysqli_connect('localhost', 'root', 'abrakadabra', 'etf_alumni');
                    if (!$conn) echo "Greska prilikom pristupa serveru.<br>";
                    
                    $sql = "SELECT id,naslov FROM vesti ORDER BY id DESC";
                    $res = mysqli_query($conn,$sql) or die("Greska pri konekciji sa bazom<br>");
                    echo '<select id="naslov" name="naslov" style="width:200px">';
                    while($row = mysqli_fetch_array($res)){
                        echo "<option value='".$row['id']."'>".$row['naslov']."</option>";
                    }
                    echo "</select>";
                    echo "<br><br>";
                    echo "<input type='submit' value='Prikazi vest/dogadjaj' name='submit'>";
                    echo "<br><br><br>";
                    ?>
                </form>
                
                <?php
                
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id =$_POST['naslov'];
                    // Konekcija sa bazom
                    $conn = mysqli_connect('localhost', 'root', 'abrakadabra', 'etf_alumni');
                    if (!$conn) echo "Greska prilikom pristupa serveru.<br>";
                    
                    $sql = "SELECT * FROM vesti WHERE id=".$id;
                    $res = mysqli_query($conn,$sql) or die("Greska pri konekciji sa bazom<br>");
                    if (mysqli_num_rows($res)===1){
                        $row = mysqli_fetch_array($res);
                        echo "<span class='vest_naslov' contenteditable='true' onchange='naslov_promena();'>".$row['naslov']."</span>";
                        echo "<br><br>";
                        if ($row['slika_naslovna']==1){
                            echo "<img src='vesti/slike_vesti/vest".$id."_slika1' style='max-width:200px; max-height:200px;'>";
                            echo "<br><br>";
                        }
                        if ($row['tip']=='d'){
                            echo "Mesto dogadjaja: ".$row['mesto_dogadjaja']."<br>";
                            echo "Vreme dogadjaja: ".$row['vreme_dogadjaja']."<br>";
                            echo "<br>";
                        }
                        echo "<span class='vest_tekst'".nl2br($row['tekst'])."</span><br><br>";
                        $i = $row['slika_naslovna']+1;
                        while ($i<=$row['broj_slika']){
                            echo "<img src='vesti/slike_vesti/vest".$id."_slika".$i."' style='max-width:200px; max-height:200px;'>";
                            $i++;
                        }
                    } else {
                        echo "Pojavila se greska. Izvinite. $id<br>";
                    }
                }
                ?>
            </div>
        </div>
        <div id="footer">
		<p>Ovo je footer</p>
	</div>
<script>
    function naslov_promena(){
        var xhttp;
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        } else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        }/*
        xhttp.open("POST", "promena_sifra.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("korisnicko_ime="+korisnicko_ime);*/
    }
    
</script>
</body>
</html>