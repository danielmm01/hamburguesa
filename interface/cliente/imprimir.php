<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/orden.css">
    </head>
    <body>
    <?php
        include('../../php/class.conexion.php');
        $modelo=new conexion();
        $conexion=$modelo->get_conexion();
        $sql="select * from tb_ingrediente where id_ingrediente=".$_GET['pan']";
        $declaracion=$conexion->prepare($sql);
        $declaracion->execute();
        $resultado=$declaracion->fetch();
    ?>
    <div class="orden">
        <h2>Pedido numero:</h2>
        <hr>
        <h4>Detalles</h4>
        <hr>
        <ol>
            <p>Ingredientes/Precio</p>
            <hr>
            <li><?php echo $resultado[1]." - ".$resultado[2] ?></li>
        </ol>  
    </div>
    
    </body>
</html>