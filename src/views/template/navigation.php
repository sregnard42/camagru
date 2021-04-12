<?php
	$leftTabs = [
		ACTIVITY_HOME,
		ACTIVITY_MONTAGE,
	];

	$rightTabsUnlogged = [
		ACTIVITY_LOGIN,
		ACTIVITY_REGISTER,
	];

	$righTabsLogged = [

	];

	$rightTabs = $rightTabsUnlogged;

	function createTab($name) {
		$class = $name === ACTIVITY ? "tab-selected" : "tab";
		return (
			"<div class=\"" .
				$class .
			"\">" .
				"<a href=\"/" .
					ROUTES[$name] .
				"\">" .
					$name .
				"</a>" .
			"</div>"
		);
	};

	function createTabs($tabs) {
		$content = null;
		foreach ($tabs as $tab) {
			$content = $content . createTab($tab);
		}
		return $content;
	}

	echo (
		"<div id=\"wrapper\">" .
			"<div class=\"tabs\">" .
				createTabs($leftTabs) .
			"</div>" .
			"<div class=\"tabs\">" .
				createTabs($rightTabs) .
			"</div>" .
		"</div>"
	);
?>