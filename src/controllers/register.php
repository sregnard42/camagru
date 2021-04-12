<?php
	require_once "src/models/register.php";

	function controller_register() {
		return model_register(
			$_POST["email"],
			$_POST["username"],
			$_POST["password"],
			$_POST["confirm"]
		);
	}
?>