
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
			
			<h1> Lista de marcadores </h1>
			<br>
			<div class="row">
			<?php require '../includes/Conexao.php'; 
			$con = new Conexao();
			$sql = 'SELECT * FROM markers  WHERE cheked ="0" ORDER BY idmarkers  DESC;';
			$rs = $con->query($sql);
			$resultados = $rs->fetchAll(PDO::FETCH_OBJ);
			
			foreach($resultados as $r) {
				$acess= array();
				if($r->rampa == 1){
				array_push($acess,'Possui rampa' );
				}else{
				array_push($acess,'Não possui rampa' );
				}
				if($r->pisotatil == 1){
				array_push($acess,'Possui piso tatil' );
				}else{
				array_push($acess,'Não possui piso tatil' );
				}
				if($r->brawl == 1){
				array_push($acess,'Possui linguajem brawle' );
				}else{
				array_push($acess,'Não possui linguajem brawle' );
				}

				echo '<div class="col">';

				echo '<h2>'.$r->titulo.'</h2>';
				echo '<p>'.$r->info.'<br>'.implode(".<br>", $acess).'</p>`)</p>';

				echo '<div class="row-md">';
				echo '<a href="../db/verificamark_db.php?id='.$r->idmarkers.'">';
				echo 'verificado';
				echo '</a>';

				echo '</div>';
				echo '<div class="row-md">';
				echo '<a href="../db/deletemark_db.php?id='.$r->idmarkers.'">';
				echo 'apagar';
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