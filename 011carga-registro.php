<?php
    //print_r($_POST);
    if(empty($_POST['validarfechaI']) || empty($_POST['validarSol'])|| empty($_POST['validarDepto'])|| empty($_POST['validarfechaR'])|| empty($_POST['validarPr'])|| empty($_POST['validarJ'])){
        header('Location: 01ingreso_solicitud.php?mensaje=falta');
        exit();
    }

    include_once 'funcs/conexion.php';
    
    $fecha_sol=$_POST['validarfechaI'];
    $barco=$_POST['validarSol'];
    $depto=$_POST['validarDepto'];
    $fecha_req=$_POST['validarfechaR'];
    $prioridad=$_POST['validarPr'];
    $obse=$_POST['validarJ'];
    
    
    $campana = "SIN REG";
    $cumplida ="NO";
   
    
    $sentencia = $bd->prepare("INSERT INTO 	registrar_solicitud(barco, depto, fecha_sol, fecha_req, prioridad, campana, obse, cumplida) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$barco, $depto ,$fecha_sol, $fecha_req, $prioridad, $campana, $obse, $cumplida]);

    if ($resultado === TRUE) {
        header('Location: 03cargar_mat.php?mensaje=registrado');
    } else {
        header('Location: 01ingreso_solicitud.php?mensaje=error');
        exit();
    }
 
?>