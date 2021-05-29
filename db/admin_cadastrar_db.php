<?php	
	require '../includes/Conexao.php';
	$con = new Conexao();
	
	# captura o id enviado pela URL
	$id = filter_input(INPUT_GET, 'id');

	
	$sql = 'UPDATE usuario SET isadm="1" WHERE id=:id';
	
	$sth = $con->prepare($sql);
	$sth->bindParam(':id', $id);
	
	
	$sth->execute();
	
	header('Location:../pages/admin_cadastrar.php');