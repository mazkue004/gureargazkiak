<?php
	session_start();
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	$sql=mysqli_query($datuak,"select * from argazkia where Eposta='$_GET[email]'");
	echo "<h3>".$_GET['email']."-ren argazkiak</h3>";
	echo '<div id="edit"></div>';
	echo '<div class="table-responsibe"><table class="table table-hover"><thead><tr><th>Izenburua</th><th>Etiketa</th><th>Mota</th><th>Argazkia</th><th>Aukerak</th></tr></thead><tbody>';
	while($argazkia=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
	if($argazkia['Argazkia'] == null){
			echo '<tr><td>'.$argazkia['Izenburua'].'</td> <td>'. $argazkia['Etiketa'].'</td> <td>'.$argazkia['Mota'].'</td><td>Erroreren batengatik ezin izan da irudirik gorde</td><td>';
			echo "<a href='javascript:ezabatuArgazkia(";
			echo $argazkia['Kodea'];
			echo ");'>";
			echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
			echo'</td></tr>';
		}else{		
			echo '<tr><td>'.$argazkia['Izenburua'].'</td> <td>'. $argazkia['Etiketa'].'</td> <td>'.$argazkia['Mota'].'</td><td>'.'<img height="120px" src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'"/>'.'</td><td>';
			echo "<a href='javascript:ezabatuArgazkia(";
			echo $argazkia['Kodea'];
			echo ");'>";
			echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
			echo '</td></tr>';
		}
	}
	echo '</tbody></table></div>';
	
	
?>