<?php
$mysqli = new mysqli('localhost','id14827438_accesodatos','1pnehbtyBR+_#ayh','id14827438_basedatosgeneral');

if($mysqli->connect_error){
    die('Error en la conexion' . $mysqli->connect_error);
}
printf("Servido Informacion: %s\n", $mysqli->server_info);


?>