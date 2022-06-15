<?php
include 'global/config.php';
include 'global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scake=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand"> SoftDihn.</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Carrito(0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <div class="container">
        <br>
            <div class="alert alert-success">
                Pantalla de mensajes
                <a href="#" class="badge badge-success">>Ver carrito</a>
            </div>
            <div class="row">
                <div class="col-3">
                    <img 
                    title="Producto 1"
                    alt="Productos"
                    class="card-img-top"
                    src="https://www.mcaelectronics.es/wp-content/uploads/2019/09/Reparacion-placas-electronicas-condensadores-768x432.jpg">
                    <div class="card-body">
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descrip</p>

                        <button class="btn btn-primary"
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit"
                        >
                        Agregar al carrito
                        </button>

                </div>
            </div>
        
    </div>
</body>
</html>