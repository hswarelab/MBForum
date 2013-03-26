<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Instalacija</title>
</head>

<body>
<?php
//------------------------------------------
// 			spajanje na bazu
//------------------------------------------
$db="forum";
$dbusr="forum";
$dbpass="forum";
$con = mysql_connect("localhost",$dbusr,$dbpass);
if(!$con){
	die("Nije uspjelo spajanje na poslužitelj!");
}
if(!mysql_select_db($db)){
	die("Nemoguce spajanje sa bazom podataka");
}

//------------------------------------------
// 			kreiranje tablica
//------------------------------------------

$q="CREATE TABLE korisnici( 
		korisnikID INTEGER AUTO_INCREMENT PRIMARY KEY,
		ime VARCHAR(25),
		korime VARCHAR(25),
		lozinka VARCHAR(50),
		email VARCHAR(50),
		admin TINYINT)";

if(@mysql_query($q)){
	echo"<p>Tablica <b>korisnici</b> je uspješno kreirana.</p>";

}else{
	echo"<p class=\"greska\">Greška pri kreiranju tablice <b>korisnici</b>!</p>";

}



$q="CREATE TABLE poruke( 
		porukaID INTEGER,
		korisnikID INTEGER,
		naslov VARCHAR(200),
		poruka TEXT,
		vrijeme TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)";

if(@mysql_query($q)){
	echo"<p>Tablica <b>poruke</b> je uspješno kreirana.</p>";

}else{
	echo"<p class=\"greska\">Greška pri kreiranju tablice <b>poruke</b>!</p>";

}


$q="CREATE TABLE odgovori( 
		odgovoriID INTEGER AUTO_INCREMENT PRIMARY KEY,
		porukaID INTEGER,
		korisnikID INTEGER,
		poruka TEXT,
		vrijeme TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)";

if(@mysql_query($q)){
	echo"<p>Tablica <b>odgovori</b> je uspješno kreirana.</p>";

}else{
	echo"<p class=\"greska\">Greška pri kreiranju tablice <b>odgovori</b>!</p>";

}







$q="INSERT INTO korisnici( ime, korime, lozinka, email, admin)
	VALUES(\"Matija\", \"mbajt\", \"mbajt\", \"matija.bajt@po.t-com.hr\", 1)";
	if(@mysql_query($q)){
		echo"<p>Administratorsi podatci su zapisani u tablicu</p>";
	}else{
		echo"<p class=\"greska\">Greška pri zapisivanju administratorskih podataka</p>";
	}



?>
</body>
</html>