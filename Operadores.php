<!DOCTYPE html>
<html>
<head>
	<title>OPERADORES PHP</title>
	<meta charset = "UTF-8">
	<?PHP
		$css = "StyleNumber.css";
		echo "<link rel='stylesheet' href='" . $css . "'>";
	?>
</head>
<body>
	<?PHP
		$n1 = 3;
		$n2 = 9;
		$soma = $n1 + $n2;
		$n3 = 100;
		$n4 = 200;
		$subtracao = $n3 - $n4;
		$n5 = 25;
		$n6 = 5;
		$divisao = $n5 / $n6;
		$n7 = 6;
		$n8 = 2;
		$n9 = 3.0;
		$equivalente = $n1 == $n9;
		$igualdade = $n1 === $n9;
		$maior = $n5 > $n2;
		$multiplicacao = $n7 * $n8;
		$mod = $n5 % $n8;
		echo "<h2>OPERAÇÕES MATEMÁTICAS</h2>";
		echo "<h4>SOMA</h4>";
		echo "<p>$n1 + $n2 = $soma</p>";
		echo "<h4>SUBTRAÇÃO</h4>";
		echo "<p>$n3 - $n4 = $subtracao</p>";
		echo "<h4>DIVISÃO</h4>";
		echo "<p>$n5 / $n6 = $divisao</p>";
		echo "<h4>MULTIPLICAÇÃO</h4>";
		echo "<p>$n7 * $n8 = $multiplicacao</p>";
		echo "<h4>MOD</h4>";
		echo "<p>$n5 % $n8 = $mod</p>";
		echo "<h2>OPERADORES CONDICIONAIS</h2>";
		echo "<p>$n1 é equivalente a $n9? $equivalente</p>";
		echo "<p>$n1 é igual a $n9? $igualdade</p>";
		echo "<p>$n5 é equivalente a $n2? $maior</p>";
	?>
</body>
</html>