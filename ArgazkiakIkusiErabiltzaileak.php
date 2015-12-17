<?php
	
	session_start();
	if(isset($_SESSION['Rola'])){
		$eposta=$_SESSION['Eposta'];
		$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
		//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
		
		$sql=mysqli_query($datuak,"select * from argazkia where Eposta='$eposta'");
		echo "<h3>Zure argazkiak</h3>";
		echo '<div id="edit"></div>';
		echo '<div class="table-responsibe"><table class="table table-hover"><tr><thead><th>Izenburua</th><th>Etiketa</th><th>Mota</th><th>Argazkia</th><th>Aukerak</th></thead><tbody></tr>';
		while($argazkia=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			if($argazkia['Argazkia'] == null){
				echo '<tr><td>'.$argazkia['Izenburua'].'</td> <td>'. $argazkia['Etiketa'].'</td> <td>'.$argazkia['Mota'].'</td><td>Erroreren batengatik ezin izan da irudirik gorde</td><td>';
				echo "<a href='javascript:ezabatuArgazkiaErabiltzailea(";
				echo $argazkia['Kodea'];
				echo ");'>";
				echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
				echo'</td></tr>';
				}else{		
				echo '<tr><td>'.$argazkia['Izenburua'].'</td> <td>'. $argazkia['Etiketa'].'</td> <td>'.$argazkia['Mota'].'</td><td>'.'<img height="120px" src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'"/>'.'</td><td>';
				echo "<a href='javascript:ezabatuArgazkiaErabiltzailea(";
				echo $argazkia['Kodea'];
				echo ");'>";
				echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
				echo "<a href='javascript:editatuArgazkiaErabiltzailea(";
				echo $argazkia['Kodea'];
				echo ");'>";
				echo'<img src="argazkiak/edit.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
				echo '</td></tr>';
			}
		}
		echo '</tbody></table>';
		echo'<div id="prib"></div></div>';
	}else{
	echo '<h2>ERROREA</h2>';
	}
	
	
	
	?>	