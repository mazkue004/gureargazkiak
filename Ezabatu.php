<?php
	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u517629783_mazk","123456") or die(mysql_error());
	mysql_select_db("u517629783_garg") or die(mysql_error());*/
	
	$sql="delete from erabiltzaile where Eposta='$_GET[email]'";
	mysql_query($sql);
	//DELETE FROM somelog WHERE user = 'jcole'
?>