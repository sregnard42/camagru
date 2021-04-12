<?php
	require_once "src/models/request.php";

	function verify_email_username($email, $username) {
		$sql = "
			SELECT	email, username
			FROM	users
			WHERE	email = \"" . $email . "\"
			OR		username = \"" . $username . "\"
		";
		$results = db_select($sql);
		$errors = [];
		foreach($results as $result) {
			if ($result->email === $email) {
				$errors["email"] = true;
			}
			if ($result->username === $username) {
				$errors["username"] = true;
			}
		}
		return $errors;
	}

	function model_register($email, $username, $password, $confirm) {
		if ($password !== $confirm) {
			$errors["confirm"] = true;
			return $errors;
		}
		$errors = verify_email_username($email, $username);
		if ($errors) {
			return $errors;
		}
		$pwd_hash = password_hash($password, PASSWORD_DEFAULT);
		$email_link = get_uuid($email);
		$email_full_link = 'http://localhost/confirm?token=' . $email_link;
		$sql = "
			INSERT INTO users (email, username, password, email_confirm)
			VALUES (\"$email\", \"$username\", \"$pwd_hash\", \"$email_link\");
		";
		if (db_insert($sql)) {
			$to			= $email;
			$subject	= 'Bienvenue sur Camagru';
			$message	=
				'Bienvenu(e) <strong>' . $username . '</strong>, merci de votre inscription sur Camagru !<br />' .
				'Veuillez confirmer votre adresse e-mail via ce lien :<br />' .
				'<a href="' . $email_full_link . '">' . $email_full_link . '</a>';
			$headers	= array(
				'Content-Type' => 'text/html; charset=ISO-8859-1\r\n',
				'From' => 'no-reply@camagru',
			);
			$ret = mail($to, $subject, $message, $headers);
			if ($ret !== true) {
				$errors["mailing"] = true;
				return $errors;
			}
			return true;
		}
		return false;
	}
?>