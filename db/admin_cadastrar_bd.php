<?php
	session_start();
	require '../includes/Conexao.php';
	$con = new Conexao();

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha');
	$isadm = 1;

	# criptografia de senha
	$salt = 'view-source:https://heeeeeeeey.com/';
	$senha = md5($salt.$senha);

	if($nome && $email && $senha) {
		$sql = 'INSERT INTO usuario (username, email, senha, isadm) VALUES (:nome, :email, :senha, :isadm)';
		$sth = $con->prepare($sql);
	
		#substituir os rótulos
		$sth->bindParam(':nome', $nome);
		$sth->bindParam(':email', $email);
		$sth->bindParam(':senha', $senha);
		$sth->bindParam(':isadm', $isadm);


		#executa o SQL
		$sth->execute();

		#redireciona para a página inicial
		header('Location:../pages/login.php');
	}
