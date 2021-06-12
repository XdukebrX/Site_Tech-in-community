<?php
	session_start();
	require '../includes/Conexao.php';
	$con = new Conexao();

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha');
	$isadm = 0;


	
	# criptografia de senha
	$salt = 'view-source:https://heeeeeeeey.com/';
	$senha = md5($salt.$senha);
	try{
		$sql = 'SELECT * FROM usuario WHERE email=:email LIMIT 1';

		$sth = $con->prepare($sql);

		#substituir os rótulos
		$sth->bindParam(':email', $email);
		

		$sth->execute();
		$usuario = $sth->fetch();
		if ($email == $usuario["email"]) {
			
			header('Location:../pages/cadastro.php?erro=1');
			
		}else{

			if($nome && $email && $senha) {
				$sql = 'INSERT INTO usuario (username, email, passwd, isadm) VALUES (:nome, :email, :senha, :isadm)';
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


		}

	}catch (\Exception $e) {
		file_put_contents("erros.txt",
							$e->getMessage()."\r\n",
							FILE_APPEND);



	}


