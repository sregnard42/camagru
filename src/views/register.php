<?php

	include_once "src/components/Field.php";
	include_once "src/components/Modal.php";

	if (isset($_POST["register"])) {
		include_once "src/controllers/register.php";
		$ret = controller_register();
		if ($ret === true) {
			header("Location: /");
		} else if ($ret === false) {
			Modal("Erreur inconnue.");
		} else {
			$errors = null;
			if ($ret) {
				if ($ret["confirm"]) {
					$errors = $errors . "<p>La confirmation de mot de passe a échouée.</p>";
				}
				if ($ret["email"]) {
					$errors = $errors . "<p>L'email est déjà pris.</p>";
				}
				if ($ret["username"]) {
					$errors = $errors . "<p>Le nom d'utilisateur est déjà pris.</p>";
				}
				if ($ret["mailing"]) {
					$errors = $errors . "<p>Compte bien créé, mais l'email de confirmation n'a pas pu être envoyé.</p>";
				}
			}
			Modal($errors);
		}
	}

	define("ACTIVITY", ACTIVITY_REGISTER);

	$fields = (
		Field("email", "Adresse email", "email", [
			"required" => true,
			(!isset($_POST["email"]) ? "autofocus" : "") => "",
		]) .
		Field("username", "Nom d'utilisateur", "text", [ "required" => true ]) .
		Field("password", "Mot de passe", "password", [ "required" => true ]) .
		Field("confirm", "Confirmer mot de passe", "password", [ "required" => true ])
	);

	$main = ("
		<form name=\"register\" method=\"post\">
			" . $fields . "
			<button name=\"register\" type=\"submit\">Créer un compte</button>
		</form>
	");

	include_once __DIR__ . "/template/page.php";
?>