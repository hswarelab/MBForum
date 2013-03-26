<?php
error_reporting(0);
session_start();
require("funkcije.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MBForum</title>

<link href='http://fonts.googleapis.com/css?family=Cuprum|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<style type="text/css">

<style type="text/css">
	html{
		padding: 0px;
		margin: 0px;
	}

  body{
  	padding: 0px;
  	margin: 0px;
    background-color: #EEEEEE;
  }

  .zaglavlje{
    background-image: url('img/header.png');
    background-repeat: repeat-x;
    height: 95px;
    padding-top: 20px;
    margin-bottom: 30px;
    
    /* Firefox v3.5+ */
	-moz-box-shadow:4px 4px 14px rgba(0,0,0,0.25);
	/* Safari v3.0+ and by Chrome v0.2+ */
	-webkit-box-shadow:4px 4px 14px rgba(0,0,0,0.25);
	/* Firefox v4.0+ , Safari v5.1+ , Chrome v10.0+, IE v10+ and by Opera v10.5+ */
	box-shadow:4px 4px 14px rgba(0,0,0,0.25);
	-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=4,OffY=4,Color=#40000000,Positive=true)";
	filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=4,OffY=4,Color=#40000000,Positive=true);
	  }

  #logo{
		background-image: url('img/logo.png'); 
		background-repeat: no-repeat;
		width: 141px;
		height: 71px;
		display: block;
		margin-left: 20%;
	}
.zaglavlje a:hover #logo {
background-image: url('img/logo.png'); 
		background-repeat: no-repeat;	
		transform: rotate(0deg) scale(1.06) skew(1deg) translate(2px);
-webkit-transform: rotate(0deg) scale(1.06) skew(1deg) translate(2px);
-moz-transform: rotate(0deg) scale(1.06) skew(1deg) translate(2px);
-o-transform: rotate(0deg) scale(1.06) skew(1deg) translate(2px);
-ms-transform: rotate(0deg) scale(1.06) skew(1deg) translate(2px);
	transition:All 1s ease;
-webkit-transition:All 1s ease;
-moz-transition:All 1s ease;
-o-transition:All 1s ease;
}
	.glavni{
		margin-left: 20%;
		margin-right: 20%;
	}

	.podnozje{
		text-align: center;
		clear: both;
		margin-top:500px;
	}
	.desni{
		float: right;
		width: 200px;
	}

	input[type="text"], input[type="password"]{
		background-color:rgb(255,255,255);
		width:226px;
		height:23px;
		border-color:rgb(200,200,200);
		border-width:1px;
		/* Firefox v1.0+ */
		-moz-border-radius:2%;
		/* Safari v3.0+ and by Chrome v0.2+ */
		-webkit-border-radius:1%/16%;
		/* Firefox v4.0+ , Safari v5.0+ , Chrome v4.0+ , Opera v10.5+  and by IE v9.0+ */
		border-radius:1%/16%;
		border-style:solid;
		/* Firefox v3.5+ */
		-moz-box-shadow:inset 1px 1px 1px rgba(0,0,0,0.43);
		/* Safari v3.0+ and by Chrome v0.2+ */
		-webkit-box-shadow:inset 1px 1px 1px rgba(0,0,0,0.43);
		/* Firefox v4.0+ , Safari v5.1+ , Chrome v10.0+, IE v10+ and by Opera v10.5+ */
		box-shadow:inset 1px 1px 1px rgba(0,0,0,0.43);



	}
	.label{
		display: block;
		width: 100%;
		color: #592F33;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
	}
#prijava{
	display: block;
		margin-right: auto;
		margin-left: auto;
		background-image: url('img/submitlogin.png');
		width:132px;
		height:32px;
		border:none;
		

-webkit-border-radius: 10px;
   -moz-border-radius: 10px;
        border-radius: 10px;
-webkit-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
   -moz-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        

	}
	#prijava:active{
		display: block;
		margin-right: auto;
		margin-left: auto;
		background-image: url('img/submitloginactive.png');
		width:132px;
		height:32px;
		border:none;
		}
	#prijava:hover{
		background-image: url('img/submitloginactive.png');
		-webkit-transition-property: background color;
  -webkit-transition-duration: 2.5s;
  -webkit-transition-timing-function: ease;
  -moz-transition-property: background color;
  -moz-transition-duration: 2.5s;
  -moz-transition-timing-function: ease;
  -o-transition-property: background color;
  -o-transition-duration: 2.5s;
  -o-transition-timing-function: ease;
  -ms-transition-property: background color;
  -ms-transition-duration: 2.5s;
  -ms-transition-timing-function: ease;
  transition-property: background color;
  transition-duration: 2.5s;
  transition-timing-function: ease;
	}
.sve .desni .nregis a {
  display: block;
  height: 50px;
  width: 200px;
  background: #ae6566;
  color: white;
  font: 17px/50px Helvetica, Verdana, sans-serif;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  
-webkit-border-radius: 10px;
   -moz-border-radius: 10px;
        border-radius: 10px;
-webkit-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
   -moz-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
		
	background: -moz-linear-gradient(top, #ae6566 0%, #633435 100%); 
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ae6566), color-stop(100%,#633435));
background: -webkit-linear-gradient(top, #ae6566 0%,#633435 100%); 
background: -o-linear-gradient(top, #ae6566 0%,#633435 100%); 
background: -ms-linear-gradient(top, #0ae6566 0%,#633435 100%); 
background: linear-gradient(top, #ae6566 0%,#633435 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ae6566', endColorstr='#633435',GradientType=0 ); 
}


.sve .desni .nregis:hover .top {
  margin: -80px 0 0 10px;
  line-height: 35px;
}
 
.sve .desni .nregis:hover .bottom {
  margin: -10px 0 0 10px;
}

.sve .desni .nregis a:active {
background: #00b7ea;
background: -moz-linear-gradient(top,  #633435 36%, #ae6566 100%); 
background: -webkit-gradient(linear, left top, left bottom, color-stop(36%,#633435), color-stop(100%,#ae6566)); 
background: -webkit-linear-gradient(top,  #633435 36%,#ae6566 100%);
background: -o-linear-gradient(top,  #633435 36%,#ae6566 100%); 
background: -ms-linear-gradient(top,  #633435 36%,#ae6566 100%); 
background: linear-gradient(top,  #633435 36%,#ae6566 100%); /
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#633435', endColorstr='#ae6566',GradientType=0 );
}

.sve .desni .nregis:active .bottom {
  margin: -20px 0 0 10px;
}
 
.sve .desni .nregis:active .top {
  margin: -70px 0 0 10px;
}

.sve .desni .nregis p {
  background: #222;
  display: block;
  height: 40px;
  width: 180px; 
  margin: -50px 0 0 10px;
  text-align: center;
  font: 12px/45px Helvetica, Verdana, sans-serif;
  color: #fff;
   
  
  position: absolute;
  z-index: -1;
   
  
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
 
  -webkit-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
     -moz-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
          box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
   
  -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
          transition: all 0.5s ease;
}
	
				
		#posalji{
		display: block;
		margin-right: auto;
		margin-left: auto;
		background-image: url('img/objavi.png');
		width:132px;
		height:32px;
		border:none;

		-webkit-border-radius: 10px;
   -moz-border-radius: 10px;
        border-radius: 10px;
-webkit-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
   -moz-box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
	}
	#posalji:active{
		display: block;
		margin-right: auto;
		margin-left: auto;
		background-image: url('img/objaviactive.png');
		width:132px;
		height:32px;
		border:none;
		}
	#posalji:hover{
		background-image: url('img/objaviactive.png');
		-webkit-transition-property: background color;
		-webkit-transition-duration: 2.5s;
		-webkit-transition-timing-function: ease;
		-moz-transition-property: background color;
		-moz-transition-duration: 2.5s;
		-moz-transition-timing-function: ease;
		-o-transition-property: background color;
		-o-transition-duration: 2.5s;
		-o-transition-timing-function: ease;
		-ms-transition-property: background color;
		-ms-transition-duration: 2.5s;
		-ms-transition-timing-function: ease;
		transition-property: background color;
		transition-duration: 2.5s;
		transition-timing-function: ease;
	}	
		.lijevi{

			width: 500px;
			float: left;
		}
.sve .glavni .desni p a {
	color: #502A2E;
	text-decoration: none;
}


  #Post {
	color: #AE6566;
}
    #Post2 {
	color: #AE6566;
}
.sve .glavni .desni p a:hover {
	color: #F00;
	text-decoration: none;
}
    .sve .glavni .desni h3 {
	color: #AF6566;
}
.podnozje{
	width: 100%;
	clear: both;
	
}
.sve .glavni .lijevi .img:hover{
	background-image: url('img/tableicon.png');
	background-repeat: no-repeat;
	transform: rotate(180deg);
	-webkit-transform: rotate(180deg); 
	-o-transform: rotate(180deg);
	-moz-transform: rotate(180deg); 

}
.sve .glavni .lijevi .img:active{
	background-image: url('img/tableicon.png');
	background-repeat: no-repeat;
	transform: scale(1.156, 1);
	-webkit-transform: scale(1.156, 1);
	-moz-transform: scale(1.156, 1);
	-o-transform: scale(1.156, 1);
	-ms-transform: scale(1.156, 1);
}

.podnozje{
	position: fixed;
	bottom: 0px;
}
    </style>
</head>

<body>
<div class="sve">

<div class="zaglavlje">
	<a href="index.php"><div id="logo"></div></a>
    
</div> <!-- kraj od zaglavlje -->
<div class="glavni">

<div class="lijevi">

<?php

if($_SESSION["prijavljen"]=="da"){
	if($_POST["bio"]=="da"){
		$naslov=$_POST["naslov"];
		$poruka=$_POST["poruka"];
		$korisnikID=$_SESSION["kid"];
		$q3="INSERT INTO poruke (korisnikID, naslov, poruka)
				VALUES ('$korisnikID', '$naslov', '$poruka')";
		mysql_query($q3);
		
		
	}
	
	
}

$q1="SELECT * FROM poruke";
$r1=mysql_query($q1);
$nporuka=mysql_num_rows($r1);
if($nporuka==0){
	echo"<p>Nema još poruka na forumu!</p>";
}else{
	echo"<table>";
	while($row=mysql_fetch_array($r1)){
		$porukaID=$row['porukaID'];
		$korisnikID=$row['korisnikID'];
		$naslov=$row['naslov'];
		$poruka=$row['poruka'];
		$vrijeme=$row['vrijeme'];
		
		 echo"<tr class=\"naslovp\"><td>
		 <div class=\"img\"><a href=\"poruka.php?oid=$porukaID\"><img src=\"img/tableicon.png\"></td></a></div>
		 <td><a href=\"poruka.php?pid=$porukaID\"> $naslov</a></td><td>$vrijeme</td></tr>";
	}
	echo"</table>";
}

if($_SESSION["prijavljen"]=="da"){
	?>
		<form action="index.php" method="post">
  <p>
    <label for="naslov" id="Post2">Naslov</label>
    <input type="text" name="naslov" id="naslov">
  </p>
  <p>
    <label for="poruka" id="Post">Poruka</label>
    <textarea name="poruka" id="poruka" cols="45" rows="5"></textarea>
  </p>
  <input type="hidden" name="bio" value="da">
  <p>
    <input type="submit" name="posalji" id="posalji" value="">
  </p>
</form>

<?php
}
?>


</div> <!-- kraj od lijevi -->
<div class="desni">
<?php
if($_SESSION["prijavljen"]=="da"){
	echo"<h3>Korisnik:</h3>";
	echo"<p>".$_SESSION["ime"]."</p>";
	echo"<p><a href=\"odjava.php\">Odjavite se</a></p>";	
}else{

?>
<form name="form1" method="post" action="prijava.php">
  <p>
    <label for="ime" class="label">Korisnicko ime:</label>
    <input type="text" name="ime" id="ime">
  </p>
  <p>
    <label for="lozinka" class="label">Lozinka:</label>
    <input type="password" name="lozinka" id="lozinka">
  </p>
  <p>
 <input type="submit" name="prijava" id="prijava" value="">
  </p>
</form>

  <div class="nregis">
  <a href="registracija.php">Niste registrirani</a>
  <p class="top">klikni</p>
  <p class="bottom">&copy;webgrupa</p>
</div>


<?php
}
?>

</div> <!-- kraj od desni -->
</div> <!-- kraj od glavni -->
<div class="podnozje">
<p>&copy; WebGrupa Tehničke škole u Požegi</p>
</div> <!-- kraj od podnozje -->
</div> <!-- kraj od sve -->
</body>
</html>