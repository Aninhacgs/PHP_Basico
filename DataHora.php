<?php
    $CSS = 'StyleDate.css';
	$Data1 = date('l, d \of F Y');
	date_default_timezone_set('America/Fortaleza');
	$Hora1 = date('H: i: s A e');
	$Data2 = date('N, j \of M y');
	$HorarioVerao = date('I');
	$AnoBissexto = date('L');
	echo"
		<!DOCTYPE html>
		<html>
			<head>
				<title>Data & Hora</title>
				<meta charset='utf-8'/>
				<link rel = 'stylesheet' href ='".$CSS."'>
			</head>

			<body>
				<p>Data no Formato: Dia da Semana, Dia do Mês, Mês e Ano</p>
				<h2>$Data1</h2>
				<p>Hora no Formato: Horas:Minutos:Segundos  Antes/Depois do Meio Dia Fuso Horaio e Horaio de Verão</p>
				<h2>$Hora1 Horario de Verão? $HorarioVerao</h2>
				<p>Data no Formato: Dia da Semana Numérico, Dia do Mês sem Preenchimento de Zero à Esquerda, Mês com Três Letras, Ano com Dois Dígitos e Se o Ano é Bissesto</p>
				<h2>$Data2 Ano Bissexto? $AnoBissexto</h2>
			</body>

		</html>
	"
?>