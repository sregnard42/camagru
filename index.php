<?php
	include_once "src/loader.php";
	switch(trim($_SERVER["REQUEST_URI"], "/")) {
		case "":
			include "src/views/home.php";
		case "montage":
			include "src/views/montage.php";
		case "login":
			include "src/views/login.php";
		case "register":
			include "src/views/register.php";
		case "confirm":
			include "src/views/confirm.php";
		default:
			include "src/views/404.php";
	}
?>