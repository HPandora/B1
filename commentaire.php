<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="font/favicon.ico"/>
	<title>Commentaire</title>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<link type="text/css" rel="stylesheet" href="menu/menu.css" media"all"/>
	<link type="text/css" rel="stylesheet" href="css/all.css" media"all"/>
	<link type="text/css" rel="stylesheet" href="css/commentaire.css" media"all"/>
	<link rel="stylesheet" type="text/css" href="idbar/idbar.css" media="all"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cloud.js"></script>
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
	 		<h1>Poster un commentaire !:</h1>
	 		<form method="post" action="commentaire.php">
	 			<input type="text" name="pseudo" placeholder="Pseudo"/><br />
	 			<textarea name="msg" placeholder="Votre message" row="8" cols="45"></textarea>
	 			<input type="submit"/>	
	 		</form>	
	 		<?php
	 		include 'contactmsg.php';
	 		?>	
	 	</div>		
		<footer> Dans le cadre de Supinfo | &copy; Copyright DeepCode 2014 | <a href="mentions-legales.html">Mentions Légales</a> </footer>
</body>
</html>