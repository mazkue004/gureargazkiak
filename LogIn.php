
<?php
	session_start();
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u517629783_mazk","123456") or die(mysql_error());
	mysql_select_db("u517629783_garg") or die(mysql_error());*/
	
	$em = -1;
	
	if(($_GET['eposta']!="") && ($_GET['pass']!="")){
		$eposta=$_GET['eposta'];
		$pass=$_GET['pass'];
		
		$sql="select Eposta,Pasahitza,Onartua,Rola from erabiltzaile where Eposta='$eposta'";
		$erabiltzaile=mysql_query($sql);
		$erab=mysql_fetch_array($erabiltzaile);
		if($erab){
			if($erab['Pasahitza']!=$pass){
				echo '<script>alert("Pasahitza ez da zuzena");window.location.href="index.php";</script>';
				}else{
				if($erab['Onartua']==0){
					echo '<script>alert("Oraindik administratzaileak ez zaitu onartu");window.location.href="index.php";</script>';
					}else{
					$_SESSION['Eposta']=$erab['Eposta'];
					$_SESSION['Rola']=$erab['Rola'];
					if($erab['Rola']=='admin'){
						//echo "admin";
						//echo '<script>administratzailea();</script>';
						header("Location:administratzailea.php");
						exit();
						}else if($erab['Rola']=='erab'){
						//echo "<a href='erabiltzailea.php'>Sartu</a>";
						header("Location:erabiltzailea.php");
						exit();
					}
				}
			}
			}else{
			echo '<script>alert("Ez zaude erregistratuta");window.location.href="index.php";</script>';
		}
		}else{
		echo '<script>alert("Bete eremu guztiak");window.location.href="index.php";</script>';
	}
?>

<html></html>