<?php session_start();?>

<nav class="navbar  navbar-light bg-light">
  <a class="navbar-brand" href="index.php">menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a  class="nav-link" href="pages/map.php"> aplicaçao </a>
      </li>
      <li class="nav-item">
        <?php
  			if( (isset($_SESSION['user']))) {
				echo '<li  class="nav-item">';
				echo '<a  class="nav-link" href="pages/logout.php"> Sair </a>';
				echo '</li>';
				if ($_SESSION['admin']) {
					echo '<li  class="nav-item">';
					echo	'<a class="nav-link " href="pages/admin_cadastrar.php"> Novo Adminstrador</a>';
					echo '</li>';
					echo '<li  class="nav-item">';
					echo	'<a class="nav-link " href="pages/lista_markers.php">Verificar novas marcaçoes</a>';
					echo '</li>';
				}else{
					echo '<li  class="nav-item">';
					echo '<a  class="nav-link" href="pages/cadastro.php">  Cadastre-se</a>';
					echo '</li>';
				}
  			} else {
				echo '<li  class="nav-item">';
				echo '<a class="nav-link" href="pages/login.php"> Entrar </a>';
				echo '</li>';
				echo '<li  class="nav-item">';
				echo '<a  class="nav-link" href="pages/cadastro.php">  Cadastre-se</a>';
				echo '</li>';
  			}
  		?>

    </ul>
  </div>
</nav>

<script src="lib/jquery.js" charset="utf-8"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js" charset="utf-8"></script>
