<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u875011436_mazk","123456") or die(mysql_error());
	mysql_select_db("u875011436_garg") or die(mysql_error());*/
	
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
			$erabepost = mysql_query("select Eposta from erabiltzaile where Eposta='$_POST[eposta]'");
			if(mysql_fetch_array($erabepost)){
				echo 'Eposta existitzen da, aldatu.';
				}else{
				$sql="INSERT INTO erabiltzaile(Eposta, Izena, Abizena1, Abizena2, Pasahitza, Rola, PerfilArgazki, Onartua) VALUES ('$_POST[eposta]','$_POST[izena]','$_POST[abizena1]','$_POST[abizena2]','$_POST[pass]','erab','$argazkiEdukia','0')";
				if(!mysql_query($sql)){
					die('Errorea:  '.mysql_error());
				}
				echo 'Ondo gorde da';
				mysql_close();
			}
			} else{
			echo 'Arazo bat egon da, ez da erabiltzailea gorde';
		}
		} else{
		echo 'Zuriunerenbat utzi duzu';
	}
?>