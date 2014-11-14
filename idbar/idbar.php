<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="idbar.css">
<!--<script type="text/javascript" src="../js/jquery.js"></script>-->
<script type="text/javascript" src="../js/idbar.js"></script>

<div id="idbar">
	<a id="connect"><p>connection</p></a>
	<hr>
	<a id="create"><p>Creation de compte<p></a>
</div>	
	<div id="co"></div>

		<form id="connection" action="page.html" method="post">
			<label for="login">Login:</label>
		<br>	
			<input type="text" name="login" id="login" placeholder="login"/>
		<hr>
			<label for="password">Password:</label>
		<br>	
			<input type="text" name="password" id="pass" placeholder="password"/>
		<hr>
			<input type="button" value="connection"/>
		</form>	
	


	<div id="cre"></div>

		<form id="creation" action="page.html" method="post">
			<label for="name">Login name:</label>
		<br>	
			<input type="text" name="name" id="name" placeholder="Nom de compte ?"/>
		<hr>
			<label for="mdp">Password:</label>
		<br>	
			<input type="text" name="mdp" id="mdp" placeholder="password ?"/>
		<hr>
			<label for="email">E-mail:</label>
		<br>	
			<input type="text" name="email" id="email" placeholder="votre e-mail ?"/>
		<hr>
			<input type="button" value="s'inscrire >"/>
		</form>	