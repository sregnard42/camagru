<?php

	// URLs
	define("PAGES", [
		"HOME" => "",
		"MONTAGE" => "montage",
		"LOGIN" => "login",
		"REGISTER" => "register",
		"LOGOUT" => "logout",
		"CONFIRM" => "confirm",
		"RESET" => "reset",
	]);

	// Link URLs to Paths
	define("PATHS", [
		PAGES["HOME"] => "src/views/home.php",
		PAGES["MONTAGE"] => "src/views/montage.php",
		PAGES["LOGIN"] => "src/views/login.php",
		PAGES["REGISTER"] => "src/views/register.php",
		PAGES["LOGOUT"] => "src/views/logout.php",
		PAGES["CONFIRM"] => "src/views/confirm.php",
		PAGES["RESET"] => "src/views/reset.php",
		"PAGE_NOT_FOUND" => "src/views/404.php",
	]);

	// Tabs
	define("ACTIVITIES", [
		"HOME" => "Galerie",
		"MONTAGE" => "Montage",
		"LOGIN" => "Se connecter",
		"REGISTER" => "Créer un compte",
		"LOGOUT" => "Se déconnecter",
	]);

	// Link URLs to Tabs
	define("ROUTES", [
		ACTIVITIES["HOME"] => PAGES["HOME"],
		ACTIVITIES["MONTAGE"] => PAGES["MONTAGE"],
		ACTIVITIES["LOGIN"] => PAGES["LOGIN"],
		ACTIVITIES["REGISTER"] => PAGES["REGISTER"],
		ACTIVITIES["LOGOUT"] => PAGES["LOGOUT"],
	]);


?>