<?php
	session_start();
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
		if((isset($_POST['izenburua'])) &&(isset($_POST['etiketa'])) && (isset($_POST['optradio']))){
			if(!filter_var($_POST['izenburua'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[A-Z]([a-zA-Z]|\s[a-zA-Z])*/"))) === false){
				$erabepost = mysqli_query($datuak,"select * from erabiltzaile where Eposta='$_SESSION[Eposta]'");
				if(mysqli_fetch_array($erabepost,MYSQLI_ASSOC)){
					$sql="INSERT INTO argazkia(Eposta, Izenburua, Etiketa, Mota, Argazkia, KopErregistratu, KopAnonimo) VALUES ('$_SESSION[Eposta]','$_POST[izenburua]','$_POST[etiketa]','$_POST[optradio]','$argazkiEdukia',0,0)";
					if(!mysqli_query($datuak,$sql)){
						die('Errorea:  '.mysql_error());
					}
					echo '<script>alert("Ondo gorde da");window.location.href="index.php";</script>';
					mysql_close();
					}else{
					echo '<script>alert("Ez dago erabiltzailea");window.location.href="index.php";</script>';
				}
				} else{
				echo '<script>alert("Arazo bat egon da, ez da argazkia igo");window.location.href="index.php";</script>';
			}
			} else{
			echo '<script>alert("Zuriunerenbat utzi duzu");window.location.href="index.php";</script>';
		}
	} else {
		echo '<script>alert("Argazkiaren tamaina 2MB baino handiagoa da");window.location.href="index.php";</script>';
	}
	
?>