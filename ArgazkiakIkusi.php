<?php
	session_start();
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u875011436_mazk","123456") or die(mysql_error());
	mysql_select_db("u875011436_garg") or die(mysql_error());*/
	
	$sql=mysql_query("select * from argazkia where Eposta='$_GET[email]'");
	echo "<h3>".$_GET['email']."-ren argazkiak</h3>";
	echo '<div id="edit"></div>';
	echo '<div class="table-responsibe"><table class="table table-hover"><thead><tr><th>Izenburua</th><th>Etiketa</th><th>Mota</th><th>Argazkia</th><th>Aukerak</th></tr></thead><tbody>';
	while($argazkia=mysql_fetch_array($sql)){
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