<!DOCTYPE html>
<html>
<head>
	<title>server page</title>
	<style type="text/css">
		h1, p {
			padding: 10px;
			text-align: center;
			color: white;
			line-height: 150%;
		}

		body {
			background-color: black;
		}

		hr {
			color:white;
		}

		p {
			font-size: 1.2em
		}
	</style>
</head>
<body>
	<h1>Voici les valeurs retournées par votre formulaire</h1>
	<hr>
	<main>
		<?php
		echo "<p>Le champ myName contient la valeur ".$_POST['prenom']." ".$_POST['nom']."<br>";
		echo "Le champ myEmail contient la valeur ".$_POST['email']."<br>";
		echo "Le champ myComments contient la valeur ".$_POST['comments']."<br></p>";
		?>
	<main>
	<hr>
</body>
</html>