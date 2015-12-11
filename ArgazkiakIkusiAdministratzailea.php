<?php
	session_start();
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("gureargazkiak") or die(mysql_error());
	/*mysql_connect("mysql.hostinger.es","u875011436_mazk","123456") or die(mysql_error());
	mysql_select_db("u875011436_garg") or die(mysql_error());*/
	
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php
			$sql=mysql_query("select * from argazkia");
			$argazkia=mysql_fetch_array($sql);
			echo'<div class="item active">';
			echo '<img src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'" alt="'.$argazkia['Izenburua'].'" width="200">';
			echo '<div class="carousel-caption">';
			echo '<h3>'.$argazkia['Izenburua'].'</h3>';
			echo '</div>';      
			echo '</div>';
			while($argazkia=mysql_fetch_array($sql)){
				echo $argazkia['Izenburua'];
				echo'<div class="item">';
				echo '<img src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'" alt="'.$argazkia['Izenburua'].'" width="200">';
				echo '<div class="carousel-caption">';
				echo '<h3>'.$argazkia['Izenburua'].'</h3>';
				echo '</div>';      
				echo '</div>';
			}
			
		?>
	</div>
	
	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>