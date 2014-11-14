<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="font/favicon.ico"/>
	<title>#Error 404</title>
	<link rel="stylesheet" type="text/css" href="css/error.css"/>
</head>
<body>
	<a href="index.php">Revenir a l'acceuille ...</a>
	<br>
	<div id="erreur"></div>
	<?php
		echo realpath("error.php");
		?>
</body>
</html>