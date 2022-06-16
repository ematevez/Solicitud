<?php
$contrasena = "";
$usuario = "root";
$nombre_bd = "crudbd";

$mysqli = new mysqli('localhost',$usuario,$contrasena,$nombre_bd);

if($mysqli->connect_error){
    die('Error en la conexion' . $mysqli->connect_error);
}
//printf("Servido Informacion: %s\n", $mysqli->server_info);

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>