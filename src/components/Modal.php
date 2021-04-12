<?php
	function Modal($text = "") {
		echo "
			<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			<link rel=\"stylesheet\" media=\"screen\">
			<button class=\"modal-btn\" id=\"myBtn\">Open Modal</button>
			<div id=\"myModal\" class=\"modal\">
				<div class=\"modal-content\">
					<span class=\"close\">&times;</span>
					<p>" . $text . "</p>
				</div>

			</div>

			<script>
				var modal = document.getElementById(\"myModal\");
				var btn = document.getElementById(\"myBtn\");
				var span = document.getElementsByClassName(\"close\")[0];
				btn.onclick = function() {
					modal.style.display = \"block\";
				}
				span.onclick = function() {
					modal.style.display = \"none\";
				}
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = \"none\";
					}
				}
				document.addEventListener('keydown', function(event){
					if(event.key === \"Escape\"){
						modal.style.display = \"none\";
					}
				});
			</script>
		";
	};
?>