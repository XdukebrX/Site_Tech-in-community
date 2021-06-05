
<html>
<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title>Novo Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">

	</head>
	<body>	
		<div class="container">
		<?php require '../includes/menu.php'; ?>
		<br>
			<h1> Selecione um usuario para promover: </h1>
			<br>
			<div class="">
				<?php require '../includes/Conexao.php'; 
				$con = new Conexao();
				$sql = 'SELECT * FROM usuario WHERE isadm=0  ORDER BY id  DESC;';
				$rs = $con->query($sql);
				$resultados = $rs->fetchAll(PDO::FETCH_OBJ);
				
				foreach($resultados as $r) {
					
					echo '<div class="row-md">';
					echo '<h2>Nome: '.$r->username.'</h2>';
					echo '<p>Email: '.$r->email.'</p>';

					echo '<div class="row-md">';
					echo '<a class="btn btn-primary" href="../db/admin_cadastrar_db.php?id='.$r->id.'">';
					echo 'Promover';
					echo '</a>';
					echo '</div>';

					echo '</div>';
					echo '<br><br>';
				}
				?>
			</div>
		</div>
	</body>
</html>