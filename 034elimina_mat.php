<?php 
    if(!isset($_GET['id_mat'])){
        header('Location: 03cargar_mat.php?mensaje=error');
        exit();
    }

    include 'funcs/conexion.php';
    $id_mat = $_GET['id_mat'];

    $sentencia = $bd->prepare("DELETE FROM descr_mat where id_mat = ?;");
    $resultado = $sentencia->execute([$id_mat]);

    if ($resultado === TRUE) {
        header('Location: 03cargar_mat.php?mensaje=eliminado');
    } else {
        header('Location: 03cargar_mat.php?mensaje=error');
    }
    
?>