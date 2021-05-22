
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="icon" href="/includes/ico.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../includes/style.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <link rel="stylesheet" href="../includes/icofont.min.css">

</head>




	<body>
		<script src="../lib/leaflet.js" ></script>
		<script src="../lib/jquery.js" ></script>
		<script src="../lib/alerts.js" ></script>
	
			<div >
					<?php require '../includes/menu.php'; ?>


				

						<div  id="mapid" ></div>
						<script>
											
							<?php 
								if( isset($_SESSION['user'])) {
										echo 'const login = true';			
									}else {
										echo 'const login = false';
									}
							?>


							var map = L.map('mapid').setView([-28.02619,-48.675272], 13);
								L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
								maxZoom: 18,
								attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
									'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
									'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
								id: 'mapbox.streets' 
							}).addTo(map);

							var popup = L.popup();

							function onMapClick(e) {
								const marcador = {
									lat: e.latlng.lat,
									lng: e.latlng.lng
								}
								popup
									.setLatLng(e.latlng)
									.setContent(`<h4> Você selecionou:${e.latlng} </h4>
										<button type="button" class="acc btn btn-secondary">Aceitar</button>`)
									.openOn(map);
									$(".acc").click(function(){
										window.location.href = "newmarcador.php?lat="+marcador.lat+"&lng="+marcador.lng;
									});
							}
						
								if(login){
									map.on("click", onMapClick)
								}
							
						<?php require '../includes/Conexao.php'; 
							$con = new Conexao();
							$sql = 'SELECT * FROM markers  WHERE cheked ="1" ORDER BY idmarkers  DESC;';
							$rs = $con->query($sql);
							$resultados = $rs->fetchAll(PDO::FETCH_OBJ);
							
							foreach($resultados as $r) {
								$acess= array();
								if($r->rampa == 1){
									array_push($acess,'<div class="text-success"><i class="icofont-wheelchair"></i> Possui rampa.</div>' );
								}else{
									array_push($acess,'<div class="text-danger"><i class="icofont-wheelchair"> Não possui rampa.</div>' );
								}
								if($r->pisotatil == 1){
									array_push($acess,'<div class="text-success"><i class="icofont-map-pins"></i> Possui piso tatil.</div>' );
								}else{
									array_push($acess,'<div class="text-danger"><i class="icofont-map-pins"></i> Não possui piso tatil.</div>' );
								}
								if($r->brawl == 1){
									array_push($acess,'<div class="text-success"><i class="icofont-hand"></i> Possui linguajem brawle.</div>' );
								}else{
									array_push($acess,'<div class="text-danger"><i class="icofont-hand"></i> Não possui linguajem brawle.</div>');
								}
								
								
								echo 'L.marker(['.$r->lat.','.$r->lon.']).addTo(map)
								.bindPopup(`<h2>'.$r->titulo.'</h2><h4>'.$r->info.'<br>'.implode($acess).'</h4>`);';
								
								
							}
						
						?>




						</script>
					


				
					</div>

						



					</div>

			</div>
	</body>
	</html>
