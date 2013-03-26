<?php
error_reporting(0);
require 'funkcije.php';
$greska="";
if($_POST["bio"]=="da"){
	$ime=$_POST["ime"];	
	$korime=$_POST["korime"];	
	$lozinka=$_POST["lozinka"];
	$email=$_POST["email"];
	
	echo "<ul>";
	if($ime=="")$greska="<li class=\"error\">Niste zadali ime!</li>";
	if($korime=="")$greska.="<li class=\"error\">Niste zadali korisničko ime!</li>";
	if($lozinka=="")$greska.="<li class=\"error\">Niste zadali lozinku!</li>";
	if($email=="")$greska.="<li class=\"error\">Niste zadali email!</li>";
	

	$q="SELECT * FROM korisnici WHERE korime='$korime' OR email='$email'";
	$r=@mysql_query($q);
	if(mysql_num_rows($r)>0){
		$greska.="<li class=\"error\">Već postoji korisnik s tim podatcima!</li>";
	}else{
		$q2="INSERT INTO korisnici( ime, korime, lozinka, email, admin)
				VALUES(\"$ime\", \"$korime\", \"$lozinka\", \"$email\", 0)";
		if(!mysql_query($q2)){
				$greska.="<li class=\"error\">Nije uspjela registracija!</li>";
		}
	}
	echo "</ul>";	
}


?>
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registracija - MBForum</title>

<link href='http://fonts.googleapis.com/css?family=Cuprum|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<style type="text/css">

	html{
		height: 100%
	}
	body{
		height: 100%
		background: rgb(141,73,75); /* Old browsers */
		background: -moz-radial-gradient(center, ellipse cover,  rgba(141,73,75,1) 0%, rgba(92,48,49,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(141,73,75,1)), color-stop(100%,rgba(92,48,49,1))); /* Chrome,Safari4+ */
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(141,73,75,1) 0%,rgba(92,48,49,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-radial-gradient(center, ellipse cover,  rgba(141,73,75,1) 0%,rgba(92,48,49,1) 100%); /* Opera 12+ */
		background: -ms-radial-gradient(center, ellipse cover,  rgba(141,73,75,1) 0%,rgba(92,48,49,1) 100%); /* IE10+ */
		background: radial-gradient(ellipse at center,  rgba(141,73,75,1) 0%,rgba(92,48,49,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8d494b', endColorstr='#5c3031',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

	}


	input[type="text"], input[type="password"]{
		background-color:rgb(107,56,57);
		width: 232px;
		height: 28px;
		/* Firefox v1.0+ */
		-moz-border-radius:1%;
		/* Safari v3.0+ and by Chrome v0.2+ */
		-webkit-border-radius:1%/10%;
		/* Firefox v4.0+ , Safari v5.0+ , Chrome v4.0+ , Opera v10.5+  and by IE v9.0+ */
		border-radius:1%/10%;
		/* Firefox v3.5+ */
		-moz-box-shadow:inset 1px 1px 4px rgba(0,0,0,0.65);
		/* Safari v3.0+ and by Chrome v0.2+ */
		-webkit-box-shadow:inset 1px 1px 4px rgba(0,0,0,0.65);
		/* Firefox v4.0+ , Safari v5.1+ , Chrome v10.0+, IE v10+ and by Opera v10.5+ */
		box-shadow:inset 1px 1px 4px rgba(0,0,0,0.65);

		float: right;
		border: none;
		padding-left: 6px;
		padding-right: 6px;
		font-family: georgia;
		color: #FFE2D9;
		font-weight: bold;


	}

	input[type="submit"]{
		background-image: url('img/submit.png');
		width:132px;
		height:32px;
		border: none;
		float: right;
		margin-right: 54px;
	}
		input[type="submit"]:active{
		background-image: url('img/subactive.png');
		width:132px;
		height:32px;
		border: none;
		float: right;
		margin-right: 54px;
		}

	
	#wrap{
		width: 400px;
		margin-right: auto;
		margin-left: auto;
		margin-top: 5%;
	}
	#logo{
		background-image: url('img/logo.png'); 
		width: 141px;
		height: 71px;
		display: block;
		margin-right: auto;
		margin-left: auto;
	}

	.label{
		color: #FFE2D9;
		font-family: 'Open Sans Condensed', sans-serif;
		width: 50%;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
}
	.label::selection{
		background: #ffb7b7;
	}
	p::selection{
			background: #ffb7b7;
		}

	
	.labelinput{
		margin-bottom: 40px;
		font-weight: bold;
	}

	.error{
		color: #FFE2D9;
		font-family: 'Open Sans Condensed', sans-serif;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
	}


	</style>
</head>

<body>
<div id="wrap">

	<div id="logo"></div><br> <br>
<?php
if($_POST["bio"]=="da"){
	if($greska==""){
		echo"<p>Bravo vi ste naš novi korisnik!</p>";
		echo"<p><a href='index.php'>Prijavite se na forum</a></p>";
		}else{
			echo $greska;
		}
	}
if($_POST["bio"]!="da" || $greska!=""){
	
?>
<form name="form1" method="post" action="registracija.php">
		  <p class="labelinput">
		    <label for="ime" class="label">Ime i prezime: </label>
		    <input type="text" name="ime" id="ime">
		  </p>
		    <p class="labelinput">
		    <label for="korime" class="label">Korisničko ime: </label>
		    <input type="text" name="korime" id="korime">
		  </p>

		  <p class="labelinput">
		    <label for="lozinka" class="label">Lozinka:</label>
		    <input type="password" name="lozinka" id="lozinka">
		  </p>
		    <p class="labelinput">
		    <label for="email" class="label">Elektronička pošta: </label>
		    <input type="text" name="email" id="email">
		  </p>
		  <input type="hidden" name="bio" id="bio" value="da">
		  <p>
		    <input type="submit" name="registracija" id="registracija" value="">
		  </p>
		</form>

<?php
}
?>
</div>
</body>
</html>