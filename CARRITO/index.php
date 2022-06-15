<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
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
        <br/>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>
                <a href="#" class="badge badge-success">>Ver carrito</a>
            </div>
            <div class="row">
                <?php 
                    $sentencia=$pdo->prepare("SELECT * FROM tblproductos");
                    $sentencia->execute();
                    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach ($listaProductos as $producto) { ?>
            
            
                    <div class="col-3">
                        <div class="card">
                            <img 
                            title="<?php echo $producto['Nombre'];?>"
                            alt="<?php echo $producto['Nombre'];?>"
                            class="card-img-top"
                            src="<?php echo $producto['Imagen'];?>"
                            data-toggle="popover"
                            data-trigger="hover"
                            data-content="<?php echo $producto['Descripcion'];?>"
                        
                            >
                            
                            <div class="card-body">
                                <span><?php echo $producto['Nombre'];?></sapn>
                                <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                                <p class="card-text">Descrip</p>

                                <form action="" method="post">
                                    <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                                    <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                                    <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                                    <input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                                    <button class="btn btn-primary"
                                    name="btnAccion" 
                                    value="Agregar" 
                                    type="submit"
                                    >
                                    Agregar al carrito
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>    
                <?php } ?>
            </div>
        
    </div>
    <script>
        $(function(){
            $('[data-toggle="popover"]').popover()
        });
    </script>
</body>
</html>