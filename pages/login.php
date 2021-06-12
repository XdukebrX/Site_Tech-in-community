
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Entrar </title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<body>

			



		<div class="container">
		<?php require '../includes/menu.php'; ?>

			<div class="bg-black f-r p-t-2 ">
				<h1 class="text-center"> Entrar </h1>
				<?php
					$erro = filter_input(INPUT_GET, 'erro');

					switch ($erro) {
						case 1:
							echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Usuario ou senha incorretos.</div>';
							break;
					}	
				?>
				<form method="post" action="../db/login_bd.php">
				
				<div class="form-group">
					<label for="nome">Endereço de E-mail</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu e-mail aqui">

				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha aqui">
				</div>

				<button type="submit" class="btn btn-primary">Entrar</button>
				</form>
			</div>
		</div>
	</body>
</html>
