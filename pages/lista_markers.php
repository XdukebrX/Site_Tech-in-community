
<html>
<head>
		<meta charset="utf-8">
		<link rel="icon" href="../includes/ico.png">
		<title> Lista de Marcação</title>
		<meta name="viewport" content="width=device-width, initial-scale:1, maximum-scale:1">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../includes/style.css">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
	</head>
	<body>		
		<div class="container">
		<?php require '../includes/menu.php'; ?>
		<br>
		<br>
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
				array_push($acess,'Possui piso tátil' );
				}else{
				array_push($acess,'Não possui piso tátil' );
				}
				if($r->brawl == 1){
				array_push($acess,'Possui linguagem braile' );
				}else{
				array_push($acess,'Não possui linguagem braile' );
				}

				echo '<div class="col">';

				echo '<h2>'.$r->titulo.'</h2>';
				echo '<p>'.$r->info.'<br>'.implode(".<br>", $acess).'</p>';
				
				echo '<div class="row">';
    			echo '<div class="col-sm-12 text-center">';
        		echo '<a class="btn btn-primary btn-md" href="../db/verificamark_db.php?id='.$r->idmarkers.'">Verificado</a>';
        		echo '<a class="btn btn-danger btn-md" href="../db/deletemark_db.php?id='.$r->idmarkers.'" >Inválido</a>';
     			echo '</div>';
				echo '</div>';
				echo '<br><br>';
			}
			?>
			</div>
		</div>
	</body>
</html>