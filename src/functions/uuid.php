<?php
	function get_uuid($prefix = "") {
		return md5(uniqid($prefix, true));
	}
?>