<!DOCTYPE html>
<html>
	<head>
		<title>CONDICIONAIS PHP</title>
		<meta charset = "UTF-8">
		<?PHP
			$css = "style.css";
			echo "<link rel='stylesheet' href='" . $css . "'>";
		?>
	</head>
	<body>
		<?PHP
			$n1 = -12;
			$n2 = 100;
			$n3 = 0;
			if ($n1< 0 && $n2 > 0 && $n3 == 0) {
				echo "<p>O valor $n1 é maior do zero!</p>
					  <p>O valor $n2 é maior do zero!</p>
					  <p>O valor $n3 é igual a zero!</p>";
			}
			else {
				echo "<p>Existem valores que não podem ser identificados!</p>";
			}
		?>
	</body>
</html>