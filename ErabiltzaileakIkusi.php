<?php 
	//session_start();
	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u517629783_mazk","123456") or die(mysql_error());
	mysql_select_db("u517629783_garg") or die(mysql_error());*/
	$sql="select * from erabiltzaile where Rola='erab'";
	$erabiltzaile=mysql_query($sql);
	echo '<div class="table-responsibe"><table class="table"><tr><th>Izena</th><th>Eposta</th></tr>';
	/**fetch_array honela jarri behar da, beste moduan ez du funtzionatzen**/
	while($erab=mysql_fetch_array($erabiltzaile)){
		if($erab['Onartua']=='0'){
			echo "<tr><td><font id='kolorea1' color='#E51212'>".$erab['Izena']."</font></td><td><font id='kolorea2' color='#E51212'>".$erab['Eposta']."</font></td><td><a id='onartuta' href='javascript:onartu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo '<img id="irudiOnartuta" src="argazkiak/accept.png" alt="accept" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='javascript:editatu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo '<img src="argazkiak/edit.png" alt="edit" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='javascript:ezabatu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='#'>";
			echo'<img src="argazkiak/noblock.png" alt="block" style="width:30px;height:30px;"></a></td></tr>';
		} 
		else if($erab['Onartua']=='1'){
			echo "<tr><td><font color='#000000'>".$erab['Izena']."</font></td><td><font color='#000000'>".$erab['Eposta']."</font></td><td><a id='onartuta' href='#'>";
			echo '<img src="argazkiak/noaccept.png" alt="accept" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='javascript:editatu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo '<img src="argazkiak/edit.png" alt="edit" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='javascript:ezabatu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo'<img src="argazkiak/delete.png" alt="delete" style="width:30px;height:30px;"></a></td><td>';
			
			echo "<a href='javascript:blokeatu(";
			echo '"'.$erab['Eposta'].'"';
			echo ");'>";
			echo'<img src="argazkiak/block.png" alt="block" style="width:30px;height:30px;"></a></td></tr>';
		}
		
	}
	echo '</table></div>';
	
	echo '<br/><br/><br/><div id="editatu"></div>';
?>