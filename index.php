<?php
	include_once "src/loader.php";

	$page = trim($_SERVER["REQUEST_URI"], "/");

	if (strpos($page, PAGES["CONFIRM"]) !== false) {
		$page = PAGES["CONFIRM"];
	}

	if (PATHS[$page]) {
		include PATHS[$page];
	} else {
		include PATHS["PAGE_NOT_FOUND"];
	}
?>