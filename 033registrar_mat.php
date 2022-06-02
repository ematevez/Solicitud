<?php
    //print_r($_POST);
    if(empty($_POST["txtMaterial"]) || empty($_POST["txtObs"])){
        header('Location: 03cargar_mat.php?mensaje=falta');
        exit();
    }

    include_once 'funcs/conexion.php';
    $mat = $_POST["txtMaterial"];
    $obs = $_POST["txtObs"];
    
    
    $sentencia = $bd->prepare("INSERT INTO descr_mat(mat,obs) VALUES (?,?);");
    $resultado = $sentencia->execute([$mat,$obs,]);

    if ($resultado === TRUE) {
        header('Location: 03cargar_mat.php?mensaje=registrado');
    } else {
        header('Location: 03cargar_mat.php?mensaje=error');
        exit();
    }
    
?>