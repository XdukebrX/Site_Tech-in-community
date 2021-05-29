
<html>
<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> lista marcaçao</title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" media="screen and (min-width:770px)">
		<link rel="stylesheet" href="../includes/style.css" media="screen and (min-width:770px)">

	</head>
	<body>		<?php require '../includes/menu.php'; ?>
		<div class="container">
			
			<h1> selecione um usuario </h1>
			<br>
			<div class="row">
			<?php require '../includes/Conexao.php'; 
			$con = new Conexao();
			$sql = 'SELECT * FROM usuario WHERE isadm=0  ORDER BY id  DESC;';
			$rs = $con->query($sql);
			$resultados = $rs->fetchAll(PDO::FETCH_OBJ);
			
			foreach($resultados as $r) {
				
				echo '<div class="col">';

				echo '<h2>Nome: '.$r->username.'</h2>';
				echo '<p>Email: '.$r->email.'</p>';

				echo '<div class="row-md">';
				echo '<a href="../db/admin_cadastrar_db.php?id='.$r->id.'">';
				echo 'Promover';
				echo '</a>';


				echo '</div>';
				echo '<br><br>';
			}
			?>
			</div>
		</div>
	</body>
</html>