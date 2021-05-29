
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Entrar </title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">
	</head>
	<body>

			<?php require '../includes/menu.php'; ?>




		<div class="container">
			<div class="bg-black f-r p-t-2 text-center">
				<h1> Entrar </h1>
				<?php
					$erro = filter_input(INPUT_GET, 'erro');

					if ($erro) {
						echo '<p class="text-danger"> Login ou senha incorretos!!! </p>';
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
