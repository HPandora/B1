<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="font/favicon.ico"/>
	<title>Contact</title>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cloud.js"></script>
	<script type="text/javascript" src="js/idbar.js"></script>
	<link rel="stylesheet" type="text/css" href="menu/menu.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/all.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/contact.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="idbar/idbar.css" media="all"/>
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
			<h1>Un problème? Une question? <br> Contactez-nous :</h1>
			<form action="mailto:votrenom@provider.com" method="post" name="contact">
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" placeholder="..."/>
				<br>
				<label for="Nom">Nom</label>	
				<input type="text" name="Nom" placeholder="..."/>
				<br>
				<label for="email">E-mail</label>	
				<input type="text" name="email" placeholder="..."/>
				<br>
				<label for="objet">Objet</label>	
				<input type="text" name="objet" placeholder="..."/>
				<br>
				<label for="message">Message</label>	
				<textarea></textarea>
				<br>
				<input type="submit" value="envoyer">
			</form>

		</div>
			<footer> Dans le cadre de Supinfo | &copy; Copyright DeepCode 2014 | <a href="mentions-legales.html">Mentions Légales</a> </footer>	
</body>
</html>