<?php

	// Création d'une connection à la base de base de donnée
	define("SERVER", "sql11.freemysqlhosting.net:3306");
	define("USER", "sql11204139");
	define("PASS", "hm6T5Ccxq4");
	define("DB", "sql11204139");

	$bdd = mysqli_connect(SERVER, USER, PASS, DB);

	// Vérification que la connection à fonctionner
	if ($bdd == false){
		echo "Connection error: " . mysqli_error($bdd);
	}

?>