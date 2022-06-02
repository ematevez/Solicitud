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
		<title>Ingreso Solicitud</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>

		
		<style>
			body {
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: white;
			}
			
            .red {
                color: red;
            }
 
            #footer {
                position: fixed;
                width: 80%;
                height: 40px;
                line-height: 40px;
                vertical-align: middle;
                background-color: black;
                color: white;
                text-align: center;
                bottom: 0;
                left: 0;
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
						
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>	
			
			<div class="jumbotron">
				<h3><?php echo 'Ingres@ Datos '.utf8_decode($row['nombre']); ?>
				</h3><br/>	
			</div>
		    	
            <div class= "container">
                    <div class="row">
                        <h3 style="text-align:center">INGRESA SOLICITUD</h3>
                    </div>

                <form method="POST" action="011carga-registro.php">
                
                   <div class="form-row mt-5">
                        <div class="col-md-4 mb-3">
                            <label for="validarfechaIngreso">Fecha de armado:<span class="red">*</span></label>
                            <input type="date" class="form-control" id="validarfechaIngreso" name="validarfechaI" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validarSolicitante">Solicitante:<span class="red">*</span></label>
                            <select class="custom-select" id="validarSol" name="validarSol" required>
                                <option selected disabled value="">Selecciona...</option>
                                <option value="APBH">APBH</option>
                                <option value="UNHIDO">UNHIDO</option>
                                <option value="BHPD">BHPD</option>
                                <option value="BHAU">BHAU</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validarDepto">Departamento:<span class="red">*</span></label>
                            <select class="custom-select" id="validarDepto" name="validarDepto" required>
                                <option selected disabled value="">Selecciona...</option>
                                <option value="K">COMANDANTE</option>
                                <option value="2K">2COMANDANTE</option>
                                <option value="JEMQ">JEMQ</option>
                                <option value="JEOP">JEOP</option>
                                <option value="JECU">JECU</option>
                                <option value="JEAB">JEAB</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validarfechaReq">Fecha de requerida:<span class="red">*</span></label>
                            <input type="date" class="form-control" id="validarfechaReq" name="validarfechaR"  required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validarPrioridad">Prioridad:<span class="red">*</span></label>
                            <select class="custom-select" id="validarPrioridad" name="validarPr" required>
                                <option selected disabled value="">Selecciona...</option>
                                <option value="alta">ALTA</option>
                                <option value="normal">NORMAL</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="validationJustifica">Justificacion:<span class="red">*</span></label>
                        <textarea class="form-control" id="validationJustifica" name="validarJ" rows="3" min="25" required></textarea>
                    </div>

                    <div class="form-group mb-6">
                        <button class="btn btn-primary" type="submit" name="submit">Cargar insumos</button>
                        <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
                        <a href="welcome.php" align="center" class="btn btn-primary" style="margin: 10px">Volver</a> 
                    </div>                  
                </form>
            </div>
        </div>
            
	</body>
</html>

<?php include 'template/footer.php' ?>