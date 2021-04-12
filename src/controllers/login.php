<?php
	require_once "src/models/login.php";

	function controller_login() {
		return model_login(
			$_POST["username"],
			$_POST["password"]
		);
	}
?>