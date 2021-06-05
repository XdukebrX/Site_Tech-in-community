<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-light  bg-light">
  <a class="navbar-brand" href="../index.php">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav justify-content-center ">
      <li class="nav-item">
          <a  class="nav-link" href="map.php"> Aplicaçao </a>
      </li>
      <?php
  			if( (isset($_SESSION['user']))) {
				echo '<li  class="nav-item">';
				echo '<a  class="nav-link" href="logout.php"> Sair </a>';
				echo '</li>';
				if ($_SESSION['admin']) {
					echo '<li  class="nav-item">';
					echo	'<a class="nav-link " href="admin_cadastrar.php"> Novo Adminstrador</a>';
					echo '</li>';
					echo '<li  class="nav-item">';
					echo	'<a class="nav-link " href="lista_markers.php">Verificar novas marcações</a>';
					echo '</li>';
				}else{
					
				}
  			} else {
				echo '<li  class="nav-item">';
				echo '<a class="nav-link" href="login.php"> Entrar </a>';
				echo '</li>';
				
  			}
  		?>

    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>