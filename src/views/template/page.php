<html>
	<head>
		<meta charset="utf-8" />
		<title>Camagru</title>
		<link rel="stylesheet" type="text/css" href="/src/styles/index.css" />
	</head>
	<div id="header">
		<? include_once __DIR__ . "/header.php"; ?>
	</div>
	<div id="navigation">
		<? include_once __DIR__ . "/navigation.php"; ?>
	</div>
	<div id="content">
		<div id="main">
			<?= $main ?>
		</div>
		<?php
			if ($side) {
				echo (
					"<div id=\"side\">"
						. $side .
					"</div>"
				);
			}
		?>
	</div>
	<div id="footer">
		<? include_once __DIR__ . "/footer.php"; ?>
	</div>
</html>