<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="font/favicon.ico"/>
	<title>Addon</title>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cloud.js"></script>
	<script type="text/javascript" src="js/idbar.js"></script>
	<link rel="stylesheet" type="text/css" href="menu/menu.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/all.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="idbar/idbar.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/addon.css"/>
</head>
<body>
			<?php
				include"idbar/idbar.php";
			?>
	<div class="cloud">
			<?php
				include"menu/menu.php";
			?>	
	</div>	
		<div id="content">
			<?php
				include"shoplist.php";
			?>
		</div>
			<footer> Dans le cadre de Supinfo | &copy; Copyright DeepCode 2014 | <a href="mentions-legales.html">Mentions Légales</a> </footer>

</body>
</html>