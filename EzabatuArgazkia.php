<?php

	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	$sqlprib="delete from pribatutasuna where Kodea='$_GET[kodea]'";
	$sql="delete from argazkia where Kodea='$_GET[kodea]'";
	mysqli_query($datuak,$sqlprib);
	mysqli_query($datuak,$sql);
	
	echo 'Argazki ondo ezabatu da';
?>