<?php
	session_start();

$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
if(isset($_POST['espezialitatea'])){
		$espezialitatea=$_POST['espezialitatea'];
		if(($espezialitatea == 'bestea')&&(isset($_POST['laguna']))){
			$espezialitatea = "Beste bat";
			$sqlprib="INSERT INTO `gureargazkiak`.`pribatutasuna` (`Kodea`, `Erabiltzailea`) VALUES ('$_POST[kodea]', '$_POST[laguna]')";
			if(!mysqli_query($datuak,$sqlprib)){
				die('Errorea:  '.mysqli_error());
			}
		}else{
			$sqlezabatu="delete from pribatutasuna where Kodea='$_POST[kodea]'";
			if(!mysqli_query($datuak,$sqlezabatu)){
				die('Errorea:  '.mysqli_error());
			}
		}
	}
	
$sql="UPDATE `gureargazkiak`.`argazkia` SET `Mota` = '$espezialitatea' where `Kodea` = '$_POST[kodea]'";
if(!mysqli_query($datuak,$sql)){
	die('Errorea:  '.mysqli_error());
}echo '<script>alert("Ondo eraldatu da");window.location.href="erabiltzailea.php";</script>';


?>