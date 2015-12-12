<?php
	session_start();
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
	
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
			$sql=mysqli_query($datuak,"select * from argazkia");
			$argazkia=mysqli_fetch_array($sql,MYSQLI_ASSOC);
			echo'<div class="item active">';
			echo '<img src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'" alt="'.$argazkia['Izenburua'].'" width="200">';
			echo '<div class="carousel-caption">';
			echo '<h3>'.$argazkia['Izenburua'].'</h3>';
			echo '</div>';      
			echo '</div>';
			while($argazkia=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
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