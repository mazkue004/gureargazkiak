<div class="container">
	<form role="form" id="erregistro" name="erregistro" method="POST" action="ErregistratuArgazkiakin.php" onsubmit="return ikusBalioak()" enctype="multipart/form-data">
		<div class="form-group">
			<label>Izen-abizenak(*): </label><input type="text" name="izena" id="izena" required placeholder="Izena" pattern="[A-Z]([a-zA-Z]|\s[a-zA-Z])*" />
			<input type="text" name="abizena1" id="abizena1" required placeholder="Abizena"  pattern="[a-zA-Z]([a-zA-Z]|\s[a-zA-Z])*"/>
			<input type="text" name="abizena2" id="abizena2" required placeholder="Abizena" pattern="[a-zA-Z]([a-zA-Z]|\s[a-zA-Z])*" />
		</div>
		<div class="form-group">
			<label>Eposta elektronikoa(*): </label><input type="email" name="eposta" id="eposta" required/>
		</div>
		<div class="form-group">
			<label>Password(*): </label><input type="password" name="pass" id="pass" required  pattern=".{6,}" onchange="return egiaztatuPasahitza()"/> 
			<label>Errepikatu password-a(*): </label><input type="password" name="pass1" id="pass1" required onchange="return egiaztatuPasahitza()"/>
			<label id="emaitzaPasahitza" style="color:red;" name = "emaitzaPasahitza"></label>
		</div>
		<div class="form-group">
			<label>Profileko argazkia nahi duzu? </label><input type="file" name="argazkia" id="argazkia" onclick="argazkiaErakutsi()"/><img id="target" width="150px" height="150px" />
		</div>
		<input type="submit" value="Erregistratu"/>
	</form>
</div>

