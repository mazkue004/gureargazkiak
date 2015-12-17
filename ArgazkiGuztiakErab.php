<?php
	session_start();
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());

		$sql="select * from argazkia where Eposta='$_SESSION[Eposta]'";
		
	$arg=mysqli_query($datuak,$sql);
?>
<center>	
	<h2><?php echo "Argazkiak"?></h2>
	<br/></br/>
	<?php 	while($argazkia=mysqli_fetch_array($arg,MYSQLI_ASSOC)){
		echo '<img  width="300" onmouseover="this.width=500;" onmouseout="this.width=300;" src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'"/>';
		echo '</br>';
		
	}?>		 
</center>