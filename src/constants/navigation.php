<?php
	// URLs
	define("PAGE_HOME", ".");
	define("PAGE_MONTAGE", "montage");
	define("PAGE_LOGIN", "login");
	define("PAGE_REGISTER", "register");
	define("PAGE_LOGOUT", "logout");

	// Tabs
	define("ACTIVITY_HOME", "Galerie");
	define("ACTIVITY_MONTAGE", "Montage");
	define("ACTIVITY_LOGIN", "Se connecter");
	define("ACTIVITY_REGISTER", "Créer un compte");
	define("ACTIVITY_LOGOUT", "Se déconnecter");

	// Link URLs to Tabs
	define("ROUTES", [
		ACTIVITY_HOME => PAGE_HOME,
		ACTIVITY_MONTAGE => PAGE_MONTAGE,
		ACTIVITY_LOGIN => PAGE_LOGIN,
		ACTIVITY_REGISTER => PAGE_REGISTER,
		ACTIVITY_LOGOUT => PAGE_LOGOUT,
	]);
?>