<?php
	session_start();
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
	if($_FILES['argazki']['size'] > 0)
	{
		$argazki = $_FILES['argazki']['name'];
		$argazkiarenIzena  = $_FILES['argazki']['tmp_name'];
		$argazkiaIriki      = fopen($argazkiarenIzena, 'r');
		$argazkiEdukia = fread($argazkiaIriki, filesize($argazkiarenIzena));
		$argazkiEdukia = addslashes($argazkiEdukia);
		fclose($argazkiaIriki);
		if(!get_magic_quotes_gpc())
		{
			$argazki = addslashes($argazki);
		}
	}
	
	if((isset($_POST['izenburua'])) &&(isset($_POST['etiketa'])) && (isset($_POST['optradio']))){
		if(!filter_var($_POST['izenburua'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[A-Z]([a-zA-Z]|\s[a-zA-Z])*/"))) === false){
			$erabepost = mysql_query("select * from erabiltzaile where Eposta='$_SESSION[Eposta]'");
			if(mysql_fetch_array($erabepost)){
				$sql="INSERT INTO argazkia(Eposta, Izenburua, Etiketa, Mota, Argazkia, KopErregistratu, KopAnonimo) VALUES ('$_SESSION[Eposta]','$_POST[izenburua]','$_POST[etiketa]','$_POST[optradio]','$argazkiEdukia',0,0)";
				if(!mysql_query($sql)){
					die('Errorea:  '.mysql_error());
				}
				echo 'Ondo gorde da';
				mysql_close();
				}else{
				echo 'Ez dago erabiltzailea';
			}
			} else{
			echo 'Arazo bat egon da, ez da argazkia gorde';
		}
		} else{
		echo 'Zuriunerenbat utzi duzu';
	}
?>