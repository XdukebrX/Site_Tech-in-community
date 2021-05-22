<?php
	session_start();

	$titulo = filter_input(INPUT_POST, 'titulo');
	$rampa = filter_input(INPUT_POST, 'ramp');
	$braw = filter_input(INPUT_POST, 'braw');
	$piso = filter_input(INPUT_POST, 'piso');
	$decs = filter_input(INPUT_POST, 'dec');
	$lng = $_SESSION['lng'];
	$lat = $_SESSION['lat'];
	$chek = 0;
	date_default_timezone_set('America/Sao_Paulo');
	$dimean = date_create('now')->format('Y-m-d H:i:s');
	
	
	
	require '../includes/Conexao.php';
	$con = new Conexao();



	if($titulo && $rampa) {
		$sql = 'INSERT INTO markers (titulo, rampa, brawl, pisotatil, info, lat, lon, cheked, dimean ) VALUES (:titulo, :ramp, :braw, :piso,:decs,:lat, :lng, :cheked, :dieman)';
		$sth = $con->prepare($sql);
	
		#substituir os rótulos
		$sth->bindParam(':titulo', $titulo);
		$sth->bindParam(':ramp', $rampa);
		$sth->bindParam(':braw', $braw);
		$sth->bindParam(':piso', $piso);
		$sth->bindParam(':decs', $decs);
		$sth->bindParam(':lng', $lng);
		$sth->bindParam(':lat', $lat);
		$sth->bindParam(':cheked', $chek);
		$sth->bindParam(':dieman', $dimean);

		#executa o SQL
		$sth->execute();

		#redireciona para a página inicial
		header('Location:../pages/map.php');
	}
