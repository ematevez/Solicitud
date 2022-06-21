
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Bienvenido</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		
		<style>
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Men&uacute;</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div>
					
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='welcome.php'>Inicio</a></li>			
						</ul>
						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							<ul class='nav navbar-nav'>
								<li><a href='adm_usuarios/index.php'>Administrar Usuarios</a></li>
							</ul>
						<?php } ?>
						
                        
                        <ul class='nav navbar-nav'>
                            <li><a class="nav-link" href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>)</a></li>
                        </ul>

						<ul class='nav navbar-nav navbar-right'>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>	
			
			<div class="jumbotron">
			