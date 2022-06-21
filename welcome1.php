<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	include 'template/cabecera.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id, nombre FROM ususarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();

?>
						<h2><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h1>
				<br/>	
			</div>
			
			<div class= "container">			
					<div>
						<a href="01ingreso_solicitud.php"  class="btn-lg btn-primary btn-block">INGRESAR SOLICITUDES </a>
						<a href="pendientes.php"  class="btn-lg btn-primary btn-block">CONSULTAS DE SOLICITUDES </a>
						<a href="#"   class="btn-lg btn-warning btn-block">ORDENES DE COMPRA</a>
						<a href="03cargar_mat.php"  class="btn-lg btn-primary btn-block">AGREGAR MATERIALES</a>
						<a href="04-0carrito.php"   class="btn-lg btn-primary btn-block">CARRITO</a>
						<a href="dark_style1.php"   class="btn-lg btn-primary btn-block">EMPTY...</a>
						<a href="0test-loguin.php"   class="btn-lg btn-primary btn-block">0test</a>
						<a href="#"   class="btn-lg btn-primary btn-block">EMPTY...</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php include 'template/footer.php' ?>