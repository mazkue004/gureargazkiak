<?php
	session_start();
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	
	$sqlarg="UPDATE `gureargazkiak`.`argazkia` SET `Mota` = 'Pribatua' where `Kodea` in (select `Kodea` from `gureargazkiak`.`pribatutasuna` where `Erabiltzailea`='$_GET[email]')";
	if(!mysqli_query($datuak,$sqlarg)){
			echo "errorea pribatutasuna eguneratzean";
	}
	
	$sqlprib="delete from pribatutasuna where Erabiltzailea='$_GET[email]'";
	if(!mysqli_query($datuak,$sqlprib)){
		echo "errorea pribatutasuna ezabatzerakoan";
	}
	
	$sqlprib2="delete from pribatutasuna where Kodea in(select Kodea from argazkia where Eposta='$_GET[email]')";
	if(!mysqli_query($datuak,$sqlprib2)){
		echo "errorea pribatutasuna ezabatzerakoan";
	}
	
	$sqlargazkiak="delete from argazkia where Eposta='$_GET[email]'";
	if(!mysqli_query($datuak,$sqlargazkiak)){
		echo "errorea argazkia ezabatzerakoan";
	}
	
	$sql="delete from erabiltzaile where Eposta='$_GET[email]'";
	if(!mysqli_query($datuak,$sql)){
			echo "errorea erabiltzailea ezabatzerakoan";
	}
	
	else{echo "Erabiltzailea ondo ezabatu da";}
?>