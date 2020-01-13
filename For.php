<!DOCTYPE html>
<html>
	<head>
		<title>FOR EM PHP</title>
		<meta charset = "UTF-8">
		<?php
			$css = "StyleRepeticao.css";
			echo "<link rel ='stylesheet' href = '" . $css . "'>";
		?>
	</head>
	<body>
		<?PHP
			echo "<h3>FOR EM PHP - VALORES DE 0 ATÉ 9</h3>";
			for($i=0;$i<10;$i++){
				echo "<p>$i</p>";
			}
		?>
	</body>

</html>