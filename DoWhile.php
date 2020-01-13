<!DOCTYPE html>
<html>
	<head>
		<title>FOR EM PHP</title>
		<meta charset="UTF-8">
		<?PHP
			$css = "StyleRepeticao.css";
			echo "<link rel ='stylesheet' href = '" . $css . "'>";
		?>
	</head>
	<body>
		<?PHP
			$n = 20;
			echo "<h3>DO WHILE EM PHP - VALORES DE 20 ATÉ 0</h3>";
			do{
				echo "<p>$n</p>";
				$n--;
			}while ($n >= 0); 
		?>
</html>