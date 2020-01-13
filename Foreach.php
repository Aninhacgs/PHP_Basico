<!DOCTYPE html>
<html>
	<head>
		<title>FOREACH EM PHP</title>
		<meta charset="UTF-8">
		<?PHP
			$css = "StyleRepeticao.css";
			echo "<link rel ='stylesheet' href = '" . $css . "'>";
		?>
	</head>
	<body>
		<?PHP
			$prog = array('HTML','CSS','PHP','XML','JAVA','PYTHON','JAVASCRIPT','PERL','RUBY','COBOL','C','C++','C#');
			echo "<h3>FOREACH EM PHP</h3>";
			foreach ($prog as $temp) {
				echo "<p>$temp</p>";
			}
		?>
	</body>
</html>