<?php
    
    if(!isset($_POST['id_mat'])){
        header('Location: 03cargar_mat.php?mensaje=error');
    }

    include 'funcs/conexion.php';
    $id_mat = $_POST['id_mat'];
    $mat = $_POST['txtMaterial'];
    $obs = $_POST['txtObs'];
    

    $sentencia = $bd->prepare("UPDATE descr_mat SET mat = ?, obs = ? where id_mat = ?;");
    $resultado = $sentencia->execute([$mat, $obs, $id_mat]);

    if ($resultado === TRUE) {
        header('Location: 03cargar_mat.php?mensaje=editado');
    } else {
        header('Location: 03cargar_mat.php?mensaje=error');
        exit();
    }
    
?>