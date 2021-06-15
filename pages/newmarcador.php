<html>
	<head>
		<meta charset="utf-8">
		<title> Criar marcaçao</title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">

	</head>
	<body>
		<div class="container">
		<?php require '../includes/menu.php'; ?>
		<br>
			<div class=" justify-content-center align-items-center" >	
			
		



				<form method="post" action="../db/newmark_bd.php">
					<div class="form-group" >
						<label for="text"> Nome do Local ou Estabelecimento</label>
						<input type="text" class="form-control" name="titulo"id="nome" >
						
					</div>
					<div class="form-group">
						<label for="dec">descrição</label>
						<br>
						<textarea class="form-control" name="dec" ></textarea>
					</div>
					<div class="form-group ">
						<label for="ops">marque as opçoes de acessibilidade abaixo</label>
						<br>
						<input type="checkbox" name="ramp" value="1" checked> Rampa<br>
						<input type="checkbox" name="piso" value="1" checked> Piso tátil <br>
						<input type="checkbox" name="braw" value="1" checked> Braile <br>

						
							
					</div>
				<!--	< um erro bem especifico>
					<input type="hidden" name="lat" value="lat"> -->
					
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</form>

				<div class="alert alert-danger" role="alert">
				<h4 class="alert-heading">Atenção!</h4>
				<p>As marcações não aparecem imediatamente no mapa. Primeiramente elas serão verificadas por um dos administradores.</p>
				
				</div>
			</div>
						
			<?php
			
			if (isset($_GET['lat'])) {
				$_SESSION['lat'] = $_GET['lat'];
				$_SESSION['lng']= $_GET['lng'];
			
			} else {
				echo '<h1>erro</h1>';
			}

			?>
		</div>
	</body>
</html>
<?php
