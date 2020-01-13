<!DOCTYPE html>
<html>
	<head>
		<title>CONVERSOR MILIMETROS</title>
		<meta charset = "UTF-8">
	</head>
	<?PHP
		$valor = $_POST['polegadas'];
		ConverteMilimetros($valor);

		function ConverteMilimetros($valor){
			$conversor = $valor * 24.5;
			echo "<p>O valor $valor em polegadas foi convertido para milímetros $conversor<p>";
		}
	?>
	<a href="EntradaFuncao.php"><button>Nova Conversao</button></a>

</html>