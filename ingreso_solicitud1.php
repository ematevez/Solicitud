

 <?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id, nombre FROM ususarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();
 ?>


<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
						
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>	
	
	  
		<div class="container">
		    
		    
			<div class="row">
				<h3 style="text-align:center">CARGAR PAP</h3>
			</div>

			<form class="form-horizontal" method="POST" action="nuevo_pap.php" autocomplete="off">
			
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
					<input type="text" disabled  class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
					
					<label for="apellido" class="col-sm-2 control-label">Aplellido</label>
					<div class="col-sm-10">
					<input type="text" disabled  class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>" required>
					</div>
					
				    <label for="dni" class="col-sm-2 control-label">DNI</label>
					<div class="col-sm-10">
					<input type="text" disabled  class="form-control" id="dni" name="dni" placeholder="DNI" value="<?php echo $row['dni']; ?>" required>
					</div>
				
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					<input type="text" disabled  class="form-control" id="correo" name="correo" placeholder="Email" value="<?php echo $row['correo']; ?>"  required>
					</div>

					<label for="obrasocial" class="col-sm-2 control-label">O.S.</label>
					<div class="col-sm-10">
					<input type="obrasocial" disabled  class="form-control" id="obrasocial" name="obrasocial" placeholder="obrasocial" value="<?php echo $row['obrasocial']; ?>" >
					</div>
					
					<label for="num_obra" class="col-sm-2 control-label">Numero O.S.</label>
					<div class="col-sm-10">
					<input type="num_obra" disabled  class="form-control" id="num_obra" name="num_obra" placeholder="Numero" value="<?php echo $row['num_obra']; ?>" >
					</div>
						
					<label for="FUM" class="col-sm-2 control-label">F.U.M.</label>
					<div class="col-sm-10">
					<input type="FUM" disabled class="form-control" id="FUM" name="FUM" placeholder="FUM" value="<?php echo $row['FUM']; ?>" >
					</div>
					
					<label for="anticonceptivo" class="col-sm-2 control-label">Anticonceptivos</label>
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" disabled id="anticonceptivo" name="anticonceptivo" value="1" <?php if($row['anticonceptivo']=='1') echo 'checked'; ?>> SI
						</label>

						<label class="radio-inline">
							<input type="radio" disabled id="anticonceptivo" name="anticonceptivo" value="0" <?php if($row['anticonceptivo']=='0') echo 'checked'; ?>> NO
						</label>
					</div>

					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" disabled id="hijos" name="hijos" value="1" <?php if($row['hijos']=='1') echo 'checked'; ?>> SI
						</label>
						<label class="radio-inline">
							<input type="radio"  disabled id="hijos" name="hijos" value="0" <?php if($row['hijos']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				
					
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				<input type="hidden" id="dni1" name="dni1" value="<?php echo $row['dni']; ?>" />

					<div class="form-group">
					<label for="protocolo" class="col-sm-2 control-label">Protocono N°: </label>
					<div class="col-sm-10">
						<input type="text"  class="form-control" id="protocolo" name="protocolo" placeholder="C20-XXXX" required>
					</div>
					
					<div class="form-group">
					<label for="medico" class="col-sm-2 control-label">Medico Remitente: </label>
					<div class="col-sm-10">
						<input type="text"  class="form-control" id="medico" name="medico" placeholder="Medico Remitente" required>
					</div>
					
					<label for="material" class="col-sm-2 control-label">Material: </label>
					<div class="col-sm-10">
					<input type="text"  class="form-control" id="material" name="material" placeholder="Material" required>
					</div>
					
					<label for="trofismo" class="col-sm-2 control-label">Trofismo: </label>
					<div class="col-sm-10">
					<input type="text"  class="form-control" id="trofismo" name="trofismo" placeholder="Trofismo">
					</div>
				
					<label for="aspecto" class="col-sm-2 control-label">Aspecto: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="aspecto" name="aspecto" placeholder="Aspecto"> 
					</div>
					
					<label for="inflamacion" class="col-sm-2 control-label">Inflamación: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="inflamacion" name="inflamacion" placeholder="Inflamacion">
					</div>
					
					<label for="flora" class="col-sm-2 control-label">Flora: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="flora" name="flora" placeholder="Flora">
					</div>
					
					<label for="moco" class="col-sm-2 control-label">Moco: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="moco" name="moco" placeholder="Moco"> 
					</div>
					
					<label for="cel_endo" class="col-sm-2 control-label">Cel Endo: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="cel_endo" name="cel_endo" placeholder="Celulas Endocervicales"> 
					</div>
					
					<label for="cel_meta" class="col-sm-2 control-label">Cel Meta: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="cel_meta" name="cel_meta" placeholder="Celulas Metaplasicas">
					</div>
					
					<label for="obs" class="col-sm-2 control-label">Observacion: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="obs" name="obs" placeholder="Observacion" >
					</div>
					
					<label for="diagnostico" class="col-sm-2 control-label">Diagnostico: </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnostico "> 
					</div>

					<label for="fechaIngreso" class="col-sm-2 control-label">Fecha Ingreso: </label>
					<div class="col-sm-10">
					<input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="Fecha de Ingreso" required> 
					</div>
				
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="welcome.php" align="center" class="btn-lg  btn-Default btn-block">Regresar</a>
						<button type="submit" class="btn-lg  btn-Primary btn-block">Guardar</button>
					</div>
					</div>
			</form>
		</div>
	</body>
</html>
