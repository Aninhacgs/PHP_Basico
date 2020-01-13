<!DOCTYPE html>
<html>
	<head>
		<title>WHILE EM PHP</title>
    	<meta charset="UTF-8">
    	<?PHP
    		$css = "StyleRepeticao.css";
    		echo "<link rel ='stylesheet' href = '". $css . "'>";
    	?>
	</head>
	<body>
		<?PHP
			$n = 0;
			echo "<h3>WHILE EM PHP - VALORES DE 0 ATÉ 10</h3>";
			while ( $n<= 10) {
				echo "<p>$n</p>";
				$n++;
			}
		?>

</html>