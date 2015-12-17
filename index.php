<?php
	session_start();
	if(isset($_SESSION['Rola'])){
		$rola=$_SESSION['Rola'];
		}else{
		$rola=null;
	}
	//$rola='logout';
	$datuak = mysqli_connect("localhost","root","","gureargazkiak") or die(mysqli_error());
	//$datuak = mysqli_connect("mysql.hostinger.es","u517629783_mazk","123456","u517629783_garg") or die(mysqli_error());
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Gure Argazkiak</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/estiloa.css">
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="./argazkiak/favicon.png"/>
		<script src="./js/erabiltzailea.js"></script>
		<script src="./js/index.js"></script>
		<script src="./js/administratzailea.js"></script>
		
		<script>function argazkia(){
	XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
		document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
	}
}
	XMLHttpRequestObject.open("GET", "Argazkia.php", true);
	XMLHttpRequestObject.send();
}
function argazkiaAdministratzailea(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
			document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	
	XMLHttpRequestObject.open("GET", "ArgazkiakIkusiAdministratzailea.php", true);
	XMLHttpRequestObject.send();
}

function ikusiArgazkiGuztiak(){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
	//alert(XMLHttpRequestObject.readyState);
	if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	document.getElementById("datuak").innerHTML=XMLHttpRequestObject.responseText;
	}
	}
	XMLHttpRequestObject.open("GET", "ArgazkiGuztiakErab.php", true);
	XMLHttpRequestObject.send();
	}

</script>
	</head>
	
	
	<body>
	
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php">Gure Argazkiak</a>
	<form class="navbar-form navbar-right">
	<input id="etiketa" name="etiketa" type="text" class="form-control" placeholder="Aurkitu..."><input type="button" onclick="javascript:begiratu();" value="Aurkitu"/>
	</form>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
	<?php
	if($rola=='erab'){ ?>
	<li><a href='javascript:argazkiaErabiltzailea("<?php echo $_SESSION['Eposta'];?>");'>Argazkiak administratu</a></li>
	<li><a href='javascript:argazkia();'>Argazkia igo</a></li>
	<li><a href="javascript:ikusiArgazkiGuztiak();">Argazkiak</a></li>
	<li><div class="dropdown">
	<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown"><?php echo "Kaixo ".$_SESSION['Izena']; ?>
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
	<li>
		<a href="sesioaItxi.php">Saioa itxi</a></li>
	</ul>
	</div></li>
	<?php }else
	if($rola=='admin'){ ?>
	<li><a href="javascript:erabiltzaileakIkusi();">Erabiltzaileak</a></li>
	<li><a href="javascript:argazkiaAdministratzailea();">Argazkiak</a></li>
	<li><div class="dropdown">
	<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown"><?php echo "Kaixo ".$_SESSION['Izena']; ?>
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
	<li>		<a href="sesioaItxi.php">Saioa itxi</a></li>

	</ul>
	</div></li>
	<?php } else{ ?><li><a href="javascript:erregistratuDeitu();">Erregistratu</a></li>
	<li><a href="javascript:creditsDeitu();">Nor gara gu?</a></li>
	<li>
	<form class="navbar-form navbar-right" method="GET" action="LogIn.php"><!--action="javascript:login();" method="POST"--> 
	<input id="em" name="eposta" type="text" class="form-control" placeholder="emaila">
	<input id="pa" name="pass" type="password" class="form-control" placeholder="pasahitza">
	<input type="submit" class="btn btn-default" value="Log in"/>
	</form>
	</li> <?php } ?>
	
	</ul>
	
	</div>
	</div>
	</nav>
	
	<div class="container">
	<div class="row">
	<div id="datuak">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	<?php if($rola=='erab'){
	$sql="select * from argazkia where Eposta='$_SESSION[Eposta]' or Mota='Publikoa' or Mota='Mugatua' or Kodea in (select Kodea from pribatutasuna where Erabiltzailea='$_SESSION[Eposta]')";
	}
	else if($rola=='admin'){
	$sql="select * from argazkia";
	}else{
	$sql="select * from argazkia where Mota='Publikoa'";
	}
	$sqlquery=mysqli_query($datuak,$sql);
	$argazkia=mysqli_fetch_array($sqlquery,MYSQLI_ASSOC);
	echo'<div class="item active">';
	echo '<img src="data:image;base64,'.base64_encode($argazkia['Argazkia']).'" alt="'.$argazkia['Izenburua'].'" width="200">';
	echo '<div class="carousel-caption">';
	echo '<h3>'.$argazkia['Izenburua'].'</h3>';
	echo '</div>';      
	echo '</div>';
	while($argazkia=mysqli_fetch_array($sqlquery,MYSQLI_ASSOC)){
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
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>
	</div>
	</div>
	</div>
	</body>
	</html>	