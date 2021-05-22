<?php
	
	$email = filter_input(INPUT_POST, 'email');
	$senha = filter_input(INPUT_POST, 'senha');

	# criptografia de senha
	$salt = 'view-source:https://heeeeeeeey.com/';
	$senha = md5($salt.$senha);

	require '../includes/Conexao.php';
	$con = new Conexao();

	#executa o SQL
	try {

			$sql = 'SELECT * FROM usuario WHERE email=:email AND senha=:senha LIMIT 1';

			$sth = $con->prepare($sql);

			#substituir os rótulos
			$sth->bindParam(':email', $email);
			$sth->bindParam(':senha', $senha);

		$sth->execute();
		$usuario = $sth->fetch();
		if ($usuario) {
			session_start();
			$_SESSION['user'] = $usuario["id"];
			$_SESSION['admin'] = $usuario["isadm"];
			header('Location:../index.php');
			
			/*
			if($_SESSION['admin']==1){
				echo 'é admin';
			}
			*/
		}
		else {
			
			header('Location:login.php?erro=1');
		}
	} catch (\Exception $e) {
		file_put_contents("erros.txt",
							$e->getMessage()."\r\n",
							FILE_APPEND);
	}


	/**if ($usuario) {
		session_start();
		$_SESSION['usuario'] = $usuario->id;
		header('Location:index.php');
	}
	else {
		header('Location:login.php?erro=1');
	}**/
