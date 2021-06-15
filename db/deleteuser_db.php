<?php	
	require '../includes/Conexao.php';
	$con = new Conexao();
	

	$id = filter_input(INPUT_GET, 'id');

	
	

	$sql = 'DELETE FROM usuario  WHERE id=:id';
	
	$sth = $con->prepare($sql);
	$sth->bindParam(':id', $id);
	
	
	$sth->execute();
	
	header('Location:../pages/admin_cadastrar.php');
