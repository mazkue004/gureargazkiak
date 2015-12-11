<?php
	session_start();
	?>
<div class="container">
	<form role="form" id="arg" name="arg" method="POST" action="ArgazkiaIgo.php"  enctype="multipart/form-data">
		<div class="form-group">
			<label>Argazkia </label><input type="file" name="argazki" id="argazki" onclick="javascript:argazkiaErakutsi();" required/><br/><img id="target" width="150px"  />
		</div>
		<div class="form-group">
			<label>Izenburua(*): </label><input type="text" name="izenburua" id="izenburua" required placeholder="Izenburua" pattern="[A-Z]([a-zA-Z]|\s[a-zA-Z])*" />
		</div>
		<div class="form-group">
			<label>Etiketa(*): </label><input type="text" name="etiketa" id="etiketa" required/> 
		</div>
		<div class="form-group">
			<label>Mota(*): </label><div class="radio">
				<label><input type="radio" name="optradio" value="prib" checked>Pribatua</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="atzipmug">Atzipen mugatua</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="publ">Publikoa</label>
			</div>
		</div>
		
		<input type="submit" value="Argazkia igo"/>
	</form>
</div>