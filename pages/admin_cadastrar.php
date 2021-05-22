
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Cadastro adm </title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.CSS" media="screen and (min-width:770px)">

	</head>
	<body>
		<?php require '../includes/menu.php'; ?>
		<div class="container">
			<div class="shadow" style="position: absolute;top: 20%;left: 30%;width: 40vw;padding:2%">	
				<h1> Novo Administrador </h1>
				<form method="post" action="../db/admin_cadastrar_bd.php">
					<label for="nome"> Nome: </label>
					<input type="text" id="nome" name="nome" required>
					<br><br>
					<label for="email"> Email: </label>
					<input type="email" id="email" name="email" required>
					<br><br>
					<label for="senha"> Senha: </label>
					<input type="password" id="senha" name="senha" required>
					<br><br>
					<input type="submit" value="Cadastrar">

				<form>
			</div>		
		</div>
	</body>
</html>
