<?php
	$main = "Confirmation de l'e-mail...<br />";
	$url = $_SERVER["REQUEST_URI"];
	$params = explode("?", $url);
	$email = $params[1];
	$token = $params[2];

	$main = $main . $url . "<br />";
	$main = $main . $email . "<br />";
	$main = $main . $token . "<br />";

	include_once __DIR__ . "/template/page.php"
?>