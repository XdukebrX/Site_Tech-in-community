<?php	
	require '../includes/Conexao.php';
	$con = new Conexao();
	
	# captura o id enviado pela URL
	$id = filter_input(INPUT_GET, 'id');

	
	$sql = 'UPDATE markers SET cheked="1" WHERE idmarkers=:id
	';
	
	$sth = $con->prepare($sql);
	$sth->bindParam(':id', $id);
	
	
	$sth->execute();
	
	header('Location:../pages/lista_markers.php');