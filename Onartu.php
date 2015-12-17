
<?php
session_start();	
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	$sql=mysqli_query($datuak,"update erabiltzaile set Onartua='1' where Eposta='$_GET[email]'");
	echo 'Onartu duzu erabiltzailea';
	?>