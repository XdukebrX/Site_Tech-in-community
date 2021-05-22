


<html>
	<head>
		<meta charset="utf-8">
		<title> Criar marcaçao</title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">

	</head>
	<body><?php require '../includes/menu.php'; ?>
		<div class="container">
			<div class="shadow" style="position: absolute;top: 20%;left: 15%;width: 45vw;padding:2%">	
			
		



				<form method="post" action="../db/newmark_bd.php">
					<div class="form-group" >
						<label for="text"> Nome do Local ou Estabelecimento</label>
						<input type="text" class="form-control" name="titulo"id="nome" >
						
					</div>
					<div class="form-group">
						<label for="dec">descrição</label>
						<br>
						<textarea name="dec" style="width:400px; height:200px;"></textarea>
					</div>
					<div class="form-group ">
						<label for="ops">marque as opçoes de acessibilidade</label>
						<br>
						<input type="checkbox" name="ramp" value="1" checked> rampa<br>
						<input type="checkbox" name="piso" value="1" checked> piso tatil <br>
						<input type="checkbox" name="braw" value="1" checked> brawle <br>

						
							
					</div>
				<!--	<input type="hidden" name="lng" value="lng">
					<input type="hidden" name="lat" value="lat"> -->
					
					<button type="submit" class="btn btn-primary">comfirma</button>
				</form>
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
