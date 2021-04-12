<?php
	function Field($name, $label, $type, $args = []) {
		$props = null;
		foreach($args as $prop => $value) {
			$props = $props . $prop . "=" . "\"" . $value . "\" ";
		}
		return ("
			<div class=\"field\">
				<label class=\"label\">" . $label . "</label>
				<input
					class=\"input\"
					name=\"" . $name . "\"
					type=\"" . $type . "\"
					placeholder=\"" . $label . "\"
					value=\"" . $_POST[$name] . "\"
					required=\"" . $required . "\"
					" . $props . "
				/>
			</div>
		");
	}
?>