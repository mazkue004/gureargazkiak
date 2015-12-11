<?php
	session_start();
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Administratzailea</title>

 
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/estiloa.css">
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
  </head>

  <body>
	<script src="./js/administratzailea.js"></script>
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="administratzailea.php">Gure Argazkiak</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:erabiltzaileakIkusi();">Erabiltzaileak</a></li>
			<li><a href="javascript:argazkia();">Argazkiak</a></li>
			<li><a href="index.php">Saioa itxi</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Aurkitu...">
          </form>
        </div>
		</div>
    </nav>

    <div class="container">
      <div class="row">
        <!--<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">1.1- <span class="sr-only">(current)</span></a></li>
            <li><a href="#">1.2-</a></li>
            <li><a href="#">1.3-</a></li>
            <li><a href="#">1.4-</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">2.1-</a></li>
            <li><a href="">2.2-</a></li>
            <li><a href="">2.3-</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">3.1-</a></li>
            <li><a href="">3.2-</a></li>
            <li><a href="">3.3-</a></li>
          </ul>
        </div>
        <div  class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div id="datuak">
		  </div>
        </div>
      </div>-->
	  <div id="datuak">
		  </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
