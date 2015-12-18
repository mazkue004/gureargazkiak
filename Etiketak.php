<?php
	session_start();
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	if(isset($_SESSION['Rola'])){
		
		
		//$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
		//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
		if ($_SESSION['Rola']=='erab'){
			$sql="select * from argazkia where (Eposta='$_SESSION[Eposta]' or Mota='Publikoa' or Mota='Mugatua' or Kodea in (select Kodea from pribatutasuna where Erabiltzailea='$_SESSION[Eposta]')) and Etiketa = '$_GET[etiketa]'";
			}else if($_SESSION['Rola']=='admin'){
			$sql="select * from argazkia where Etiketa = '$_GET[etiketa]'";
			
		}
		}else{
		$sql="select * from argazkia where Mota='Publikoa' and Etiketa = '$_GET[etiketa]'";
	}$arg=mysqli_query($datuak,$sql);
?>
<center>	
	<h2><?php echo $_GET['etiketa']." etiketa duten argazkia(k)"?></h2>
	<br/></br/>
	<?php 	while($argazkia=mysqli_fetch_array($arg,MYSQLI_ASSOC)){
		echo '<img  width="300" onmouseover="this.width=500;" onmouseout="this.width=300;" src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'"/>';
		echo '</br>';
		echo '</br>';
	}?>		 
</center>