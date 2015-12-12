<?php
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	/*$route='argazkiak/';
		$gordetzekoArgazkia = $route . basename($_FILES['argazkia']['name']);
		if(move_uploaded_file($_FILES['argazkia']['tmp_name'], $gordetzekoArgazkia)){
		echo "File is valid";
		} else{
		echo "Possible error";
		}
	$pic = ($_FILES['argazkia']['name']);*/
	
	//Argazkia
	$argazkiEdukia =null;
	if($_FILES['argazkia']['size'] > 0)
	{
		$argazki = $_FILES['argazkia']['name'];
		$argazkiarenIzena  = $_FILES['argazkia']['tmp_name'];
		$argazkiaIriki      = fopen($argazkiarenIzena, 'r');
		$argazkiEdukia = fread($argazkiaIriki, filesize($argazkiarenIzena));
		$argazkiEdukia = addslashes($argazkiEdukia);
		fclose($argazkiaIriki);
		if(!get_magic_quotes_gpc())
		{
			$argazki = addslashes($argazki);
		}
	}
	
	if((isset($_POST['izena'])) &&(isset($_POST['abizena1'])) && (isset($_POST['abizena2'])) && (isset($_POST['eposta'])) &&(isset($_POST['pass'])) && (isset($_POST['pass1']))){
		if((!filter_var($_POST['izena'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[A-Z]([a-zA-Z]|\s[a-zA-Z])*/"))) === false) &&
		(!filter_var($_POST['abizena1'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[a-zA-Z]([a-zA-Z]|\s[a-zA-Z])*/"))) === false) &&
		(!filter_var($_POST['abizena2'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[a-zA-Z]([a-zA-Z]|\s[a-zA-Z])*/"))) === false)){
			$erabepost = mysqli_query($datuak,"select Eposta from erabiltzaile where Eposta='$_POST[eposta]'");
			if(mysqli_fetch_array($erabepost,MYSQLI_ASSOC)){
				echo '<script>alert("Eposta existitzen da, aldatu");window.location.href="index.php";</script>';
				}else{
				$sql="INSERT INTO erabiltzaile(Eposta, Izena, Abizena1, Abizena2, Pasahitza, Rola, PerfilArgazki, Onartua) VALUES ('$_POST[eposta]','$_POST[izena]','$_POST[abizena1]','$_POST[abizena2]','$_POST[pass]','erab','$argazkiEdukia','0')";
				if(!mysqli_query($datuak,$sql)){
					die('Errorea:  '.mysqli_error());
				}
				echo '<script>alert("Ondo gorde da");window.location.href="index.php";</script>';
				mysqli_close();
			}
			} else{
			echo '<script>alert("Arazo bat egon da, ezin izan da erabiltzailea gorde");window.location.href="index.php";</script>';
		}
		} else{
		echo '<script>alert("Zuriunerenbat utzi duzu");window.location.href="index.php";</script>';
	}
?>