<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])){?>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%"  class="text-center">--</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center"><?php echo number_format($producto['CANTIDAD']*$producto['PRECIO'],2);?></td>
            <td width="5%">
                
                <form action="" method="post">
                
                    <input type="hidden" 
                    name="id" 
                    value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">

                        <button 
                        class="btn btn-danger" 
                        type="submit"
                        name="btnAccion"
                        value="Eliminar"
                        >Eliminar</button>
                </form>

            </td>

        </tr>
        <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><h3>TOTAL</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
        </tr>
    </tbody>
</table>
<?php }else{ ?>
<div class="alert alert-success">
    No hay productos en el carrito...
</div>
<?php }?>
<?php include 'templates/pie.php'; ?>