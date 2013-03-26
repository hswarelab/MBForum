<?php

session_start();

$ime=$_POST["ime"];
$lozinka=$_POST["lozinka"];

require("funkcije.php");

$q="SELECT * FROM korisnici WHERE korime = '$ime' AND lozinka = '$lozinka'";
$result=mysql_query($q);
if(mysql_num_rows($result)==1){
	
	$row= mysql_fetch_array($result);
	
	$_SESSION["ime"]=$row["ime"];
	$_SESSION["prijavljen"]="da";
	$_SESSION["kid"]=$row["korisnikID"];
	
	
}else{
	
	$_SESSION=array();
	session_destroy();
	
}

header("Location: index.php");



?>