<?php
	
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	$sql="delete from erabiltzaile where Eposta='$_GET[email]'";
	mysqli_query($datuak,$sql);
	
	echo "Erabiltzailea ondo ezabatu da";
?>