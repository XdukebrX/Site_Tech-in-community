
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Entrar </title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../includes/style.css">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
	</head>
	<body>

			



		<div class="container">
		<?php require '../includes/menu.php'; ?>

			<div class="bg-black f-r p-t-2 ">
				<h1 class="text-center"> Entrar </h1>
				<?php
					$erro = filter_input(INPUT_GET, 'erro');

					if ($erro) {
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Usuario ou senha incorretos.</div>';
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
