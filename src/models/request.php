<?php
	function request($sql) {
		include "config/database.php";
		$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]);
		try {
			$query = $pdo->query($sql);
		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo $error;
		}
		return $query;
	}

	function db_select($sql) {
		$result = request($sql);
		if ($result) {
			return $result->fetchAll();
		} else {
			return false;
		}
	}

	function db_insert($sql) {
		return $result = request($sql);
	}
?>