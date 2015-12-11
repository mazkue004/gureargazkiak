<?php

	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u517629783_mazk","123456") or die(mysql_error());
	mysql_select_db("u517629783_garg") or die(mysql_error());*/
	
	$sql="delete from argazkia where Kodea='$_GET[kodea]'";
	mysql_query($sql);
	
	echo 'Argazki ondo ezabatu da';
?>