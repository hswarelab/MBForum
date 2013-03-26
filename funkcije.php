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
?>