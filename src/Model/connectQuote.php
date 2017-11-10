<?php

	// Création d'une connection à la base de base de donnée
	define("SERVER", "localhost:3306");
	define("USER", "root");
	define("PASS", "root");
	define("DB", "checkpoint-1-27/10/2017"); 

	$bdd = mysqli_connect(SERVER, USER, PASS, DB);

	// Vérification que la connection à fonctionner
	if ($bdd == false){
		echo "Connection error: " . mysqli_error($bdd);
	}

?>