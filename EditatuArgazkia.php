
<?php
	session_start();

	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
	$sql = "select * from Argazkia where Kodea='$_GET[kodea]'";
	$query=mysqli_query($datuak,$sql);
	while($edit=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$izen=$edit['Izenburua'];
	}
?>
<div class="form-group">
		<label><?php echo $izen ?> argazkiaren mota aldatu: </label>
		<form role="form" id="arg" name="arg" method="POST" action="EditatuPribatutasuna.php"  enctype="multipart/form-data">
		<select name="espezialitatea" id="espezialitatea" required onchange="bestePribatutasuna()">
			<option value="Pribatua">Pribatua</option>
			<option value="Mugatua">Atzipen mugatua</option>
			<option value="Publikoa">Publikoa</option>
			<option value="bestea" >Beste bat</option>
			<input name="kodea" type="text"  hidden value="<?php echo $_GET['kodea'];?>">
		</select>
		<div id="best"></div>
		<input type="submit" value="Gorde"/>
		</form>
		
</div>