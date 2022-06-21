<?php


$contrasena = "";
$usuario = "root";
$nombre_bd = "crudbd";

$mysqli = new mysqli('localhost',$usuario,$contrasena,$nombre_bd);

if($mysqli->connect_error){
    die('Error en la conexion' . $mysqli->connect_error);
}
//printf("Servido Informacion: %s\n", $mysqli->server_info);
?>