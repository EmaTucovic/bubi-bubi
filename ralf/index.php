<!DOCTYPE html>
<html>
<head>


<head>
	<!-- Latest <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel = "stylesheet" href="css1.css">


<title> Registracija </title>
</head>
<body>
	
	<!--
	<div class="container">
		<div class="row" id = "fixheader">
			<div class="col-lg-2">
				<div id = "logo"> <img src = "logo2.jpg" alt="logo" style = "width:130px"> </div>
			</div>
			<div class="col-lg-6">
				<h1>Ovo je header sa naslovom logom i navigacijom.</h1>
			</div>
			<div class="col-lg-4" id="menu">
				<ul class="nav nav-tabs ">
					<li > <a href="#">Pocetna stranica</a></li>
					<li class="active"> <a href="#">Registracija</a></li>
					<li> <a href="#">Log in</a></li>
				
				</ul>
			</div>
		</div>
	</div>
	-->
			
		
	<div id = "fixheader">
		<div id = "logo"> <img src = "logo2.jpg" alt="logo" style = "width:130px"> </div>
		
			<p ><span id="header">Ovo je header sa naslovom logom i navigacijom.</span>
		
		
		<span id="menu">
				
					<button class="btn-menu"> <a href="#" class="btn-color">Pocetna stranica</a></button>
					<button class="btn-menu"> <a href="#" class="btn-color">Registracija</a></button>
					<button class="btn-menu"> <a href="#" class="btn-color">Log in</a></button>
				
		</span>
		
		</p>
		
	</div>
	
	
	<!--<a href="../"> Pocetna stranica </a>-->
	
	
	
	
	<div class = "registracija">
	<form name="form_registracija" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">
            <span  class="label1"> <label for="korisnicko_ime"> Korisnicko ime </label></span>
            <input class="input1" type="text" name="korisnicko_ime" id="korisnicko_ime"> 
            <br>
            <span  class="label1"> <label for="sifra"> Sifra </label></span>
            <input class="input1" type="password" name="sifra" id="sifra">
            <br>
            <span  class="label1"> <label for="sifra_potvrda"> Potvrdite vasu sifru </label></span>
            <input class="input1" type="password" name="sifra_potvrda" id="sifra_potvrda">
            <br>
            <span  class="label1"> <label for="ime"> Ime: </label></span>
            <input class="input1" type="text" name="ime" id="ime">
            <br>
            <span  class="label1"> <label for="prezime"> Prezime: </label></span>
            <input class="input1" type="text" name="prezime" id="prezime">
            <br>
            <p class = "label1">Pol: &nbsp;&nbsp; </p>
			<span id = "pol">
				<label for="muski"> muski </label> <input type="radio" name="pol" id="muski" value="muski">
				<label for="zenski"> zenski </label> <input type="radio" name="pol" id="zenski" value="zenski">
				<label for="drugo"> drugo </label> <input type="radio" name="pol" id="drugo" value="drugo">
			</span>
            <br>
            <span  class="label1"> <label for="mesto_rodjenja"> Mesto rodjenja: </label></span>
            <input class="input1" type="text" name="mesto_rodjenja" id="mesto_rodjenja">
            <br>
            <span  class="label1"> <label for="drzava_rodjenja"> Drzava rodjenja: </label></span>
            <input class="input1" type="text" name="drzava_rodjenja" id="drzava_rodjenja">
            <br>
            <span  class="label1"> <label for="datum_rodjenja"> Datum rodjenja: </label></span>
            <input class="input1" type="date" name="datum_rodjenja" id="datum_rodjenja">
            <br>
            <span  class="label1"> <label for="jmbg"> JMBG: </label></span>
            <input class="input1" type="text" name="jmbg" id="jmbg" size="13">
            <br>
            <span  class="label1"> <label for="mobilni"> Kontakt mobilni telefon: </label></span>
            <input class="input1" type="text" name="mobilni" id="mobilni" size="20">
            <br>
            <span  class="label1"> <label for="godina_upisa"> Godina upisa ETF-a: </label></span>
            <select id="godina_upisa" name="godina_upisa">
                <?php
                    for($year = date(Y,time());$year>=1945;$year--){
                        echo "<option value=".$year."> ".$year." </option>";
                    }
                ?>
            </select>
            <br>
            <span  class="label1"> <label for="godina_zavrsetka"> Godina zavrsetka ETF-a: </label></span>
            <select name="godina_zavrsetka" id="godina_zavrsetka">
                <?php
                    for($year = date(Y,time());$year>=1945;$year--){
                        echo "<option value=".$year."> ".$year." </option>";
                    }
                ?>
            </select>
            <br>
            <span  class="label1"> <label for="odsek"> Odsek koji ste studirali: </label></span>
            <select name="odsek">
                <option value="" disabled selected> Odaberite </option>
                <option value="OS"> Signali i sistemi / Automatika </option>
                <option value="OE"> Elektronika </option>
                <option value="OG"> Energetika </option>
                <option value="IR"> Racunarska tehnika i informatika </option>
                <option value="OT"> Telekomunikacije </option>
                <option value="OF"> Fizicka elektronika </option>
                <option value="OO"> Ostali </option>
            </select>
            <br>
			<p class="label1">Da li ste bili delegat?</p> &nbsp;&nbsp;
			<span id="delegat">
				<label for="da"> da </label><input type="radio" name="je_delegat" id="da_delegat" value="da">
				<label for="ne"> ne </label><input type="radio" name="je_delegat" id="ne_delegat" value="ne">
				
			</span>
            <br>
            <span  class="label1"> <label for="slika" title="u JPG ili PNG formatu"> Slika: </label></span>  
            <span class="input1"><input  type="file" name="slika" id="slika" title="u JPG ili PNG formatu"></span>
            <br>
			<div style="margin-top:20px">
			<span class="reg-potvrda">
				<input type="submit" value="Registruj me" name="registruj_me" id="registruj_me">
				<input type="button" value="Obrisi sve" name="obrisi_sve" id="obrisi_sve">
			</span>
			</div>
	</form>
	</div>
	
	<footer>
		<p>Ovo je footer</p>
	</footer>
	
	
	
	
	<!-- jquery first -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>1
	
	
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $korisnicko_ime=$sifra=$sifra_potvrda=$ime=$prezime=$pol=$mesto_rodjenja=$drzava_rodjenja="";
        $datum_rodjenja=$jmbg=$mobilni=$godina_upisa=$godina_zavrsetka=$odsek=$je_delegat="";
        $greska_popunjavanja="";
        
        if (isset($_POST['korisnicko_ime'])){
            $korisnicko_ime=provera_podataka($_POST['korisnicko_ime']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['sifra'])){
            $korisnicko_ime=provera_podataka($_POST['sifra']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['sifra_potvrda'])){
            $korisnicko_ime=provera_podataka($_POST['sifra_potvrda']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['ime'])){
            $korisnicko_ime=provera_podataka($_POST['ime']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['prezime'])){
            $korisnicko_ime=provera_podataka($_POST['prezime']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['pol'])){
            $korisnicko_ime=provera_podataka($_POST['pol']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['mesto_rodjenja'])){
            $korisnicko_ime=provera_podataka($_POST['mesto_rodjenja']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['drzava_rodjenja'])){
            $korisnicko_ime=provera_podataka($_POST['drzava_rodjenja']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['datum_rodjenja'])){
            $korisnicko_ime=provera_podataka($_POST['datum_rodjenja']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['jmbg'])){
            $korisnicko_ime=provera_podataka($_POST['jmbg']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['$mobilni'])){
            $korisnicko_ime=provera_podataka($_POST['$mobilni']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['godina_upisa'])){
            $korisnicko_ime=provera_podataka($_POST['godina_upisa']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['godina_zavrsetka'])){
            $korisnicko_ime=provera_podataka($_POST['godina_zavrsetka']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['odsek'])){
            $korisnicko_ime=provera_podataka($_POST['odsek']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['je_delegat'])){
            $korisnicko_ime=provera_podataka($_POST['je_delegat']);
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        if (isset($_POST['registruj_me'])){
            
        } else {
            $greska_popunjavanja="<br>Greska: nije setovana promenljiva <br>";
        }
        
        
        
        function provera_podataka($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
?>