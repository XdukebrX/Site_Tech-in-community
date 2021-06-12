
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Cadastro </title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

	</head>
	<body>
	
		<div class="container">
		<?php require '../includes/menu.php'; ?>
				<br>
				<br>
			<div class="bg-black f-r p-t-2 " >	
				<h1  class="text-center"> Novo Usuário </h1>
				<?php
					$erro = filter_input(INPUT_GET, 'erro');

					switch ($erro) {
						case 1:
							echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email ja em uso.</div>';
							break;
						
						
						default:
							# code...
							break;
					}	
				?>
				
				
				
				
				<form method="post" action="../db/cadastrar_bd.php">

					<div class="form-group">
						<label for="nome"> Nome: </label>
						<input type="text" class="form-control" id="nome" name="nome" required>
					</div>	
					<br><br>
					<div class="form-group">
						<label for="email"> Email: </label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<br><br>
					<div class="form-group">
						<label for="senha"> Senha: </label>
						<input type="password"  class="form-control" id="senha" name="senha" required>
					</div>
						
					<br><br>
						<input type="submit"  class="btn btn-primary" value="Cadastrar">
				<form>
			</div>		
		</div>
	</body>
</html>
