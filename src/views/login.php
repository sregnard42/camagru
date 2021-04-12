<?php

	include_once "src/components/Field.php";
	include_once "src/components/Modal.php";

	if (isset($_POST["login"])) {
		include_once "src/controllers/login.php";
		$ret = controller_login();
		if ($ret === true) {
			header("Location: /");
		} else if ($ret === false) {
			Modal("Erreur inconnue.");
		} else {
			$errors = null;
			if ($ret) {
				if ($ret["username"]) {
					$errors = $errors . "Ce nom d'utilisateur n'existe pas.";
				}
				if ($ret["password"]) {
					$errors = $errors . "Le mot de passe ne correspond pas.";
				}
			}
			Modal($errors);
		}
	}

	define("ACTIVITY", ACTIVITY_LOGIN);

	$fields = (
		Field("username", "Nom d'utilisateur", "text", [
			"required" => true,
			(!isset($_POST["username"]) ? "autofocus" : "") => "",
		]) .
		Field("password", "Mot de passe", "password", [ "required" => true ])
	);

	$main = ("
		<form name=\"login\" method=\"post\">
			" . $fields . "
			<button name=\"login\" type=\"submit\">Se connecter</button>
		</form>
	");

	include_once __DIR__ . "/template/page.php"
?>