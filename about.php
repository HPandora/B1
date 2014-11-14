<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="font/favicon.ico"/>
	<title>About</title>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<link type="text/css" rel="stylesheet" href="menu/menu.css" media"all"/>
	<link type="text/css" rel="stylesheet" href="css/all.css" media"all"/>
	<link type="text/css" rel="stylesheet" href="css/about.css" media"all"/>
	<link rel="stylesheet" type="text/css" href="idbar/idbar.css" media="all"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cloud.js"></script>
	<script type="text/javascript" src="js/about.js"></script>
	<script type="text/javascript" src="js/idbar.js"></script>
</head>
<body>
		<?php
			include"idbar/idbar.php";
		?>
	<div class="cloud">
		<?php
 		include 'menu/menu.php';
 		?>
 	</div>
 			<div id="content">
 				<h1>Presentation de l'équipe:</h1>
 				<img src="font/dream_team.jpg" atl="banniere mario et luigi dream team bros"/>
 				<div id="Presentation"><article><h3>Holleville François:</h3>Passionné de Web, Francois a réalisé le site en HTML5, CSS3, PHP et JAVASCRIPT.<br> Il a aussi participé à la mise en place du webservice.</article>
 				<article><h3>Obry Julien:</h3>Julien s'est occupé de la majeure partie du jeu en C car c'est un language <br>qu'il affectionne depuis quelques années.</article>
 				<article><h3>Compere Benoit:</h3>Benoit s'est chargé du module NACL, du management du projet et <br>il a participé en partie aux ameliorations du jeu et du site.</article></div>
 					<hr>
 					<hr>
 				<h2>Trouver tous les détails du projet en cliquant sur la miniature pdf !</h2>
 				<img id="miniature" src="font/miniaturepdf.png"></img>


 				<div id="zoom">
 					<iframe src="pdf/project_guide.pdf"></iframe>
 					<br>
 					<p>Pour revenir cliquer hors du pdf</p>
 				</div>
 			</div>
 				<footer> Dans le cadre de Supinfo | &copy; Copyright DeepCode 2014 | <a href="mentions-legales.html">Mentions Légales</a> </footer>		
</body>
</html>