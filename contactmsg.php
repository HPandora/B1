<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/contactmsg.css" media"all"/>
</head>
<body>
	<div id="phpmesg">
		<?php  
			$db = new PDO('mysql:host=localhost;dbname=blockbreaker', 'root', 'root');
		 if(isset($_POST['pseudo'])) {
		  	$req = "INSERT INTO msgbox(pseudo, msg) VALUES(:p, :m)";
		 	$req = $db->prepare($req);
		 	$req->bindValue(':p', $_POST['pseudo']);
		 	$req->bindValue(':m', $_POST['msg']);
		 	$req->execute();
		 }
		$db = new PDO('mysql:host=localhost;dbname=blockbreaker', 'root', 'root');

		 $req2 = "SELECT * FROM msgbox ORDER BY id DESC LIMIT 10";
		 $disp = $db->query($req2);
		 $res = $disp->fetchAll();

		foreach ($res as $donnees) {
			echo "<p><hr><strong>".$donnees['pseudo']."</strong><br/>".$donnees['msg']."<hr></p>";
		}

		unset($db);
		?>
	</div>
</body>
</html>