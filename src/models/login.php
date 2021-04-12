<?php
	require_once "src/models/request.php";

	function model_login($username, $password) {
		$sql = ("
			SELECT	password
			FROM	users
			WHERE	username = \"" . $username . "\"
		");
		if ($result = db_select($sql)) {
			$hash = $result[0]->password;
			if (password_verify($password, $hash)) {
				return true;
			} else {
				$errors['password'] = true;
				return $errors;
			}
		}
		$errors['username'] = true;
		return $errors;
	}
?>