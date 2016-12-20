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
        error_reporting(E_ALL ^ E_NOTICE);
        include('../../php/class.conexion.php');
        $modelo=new conexion();
        $pan=$_GET[pan];
        $carne=$_GET[carne];
        $salsa=$_GET[salsa];
        $carne_fria=$_GET[carne_fria];
        $aderezos=$_GET[aderezos];
        $vegetal=$_GET[vegetal];
        $queso=$_GET[queso];
        $bebida=$_GET[bebida];
        
        $conexion=$modelo->get_conexion();
        $sql="select * from tb_ingrediente where id_ingrediente=$pan or id_ingrediente=$carne or id_ingrediente=$salsa or id_ingrediente=$carne_fria or id_ingrediente=$aderezos or id_ingrediente=$vegetal or id_ingrediente=$queso or id_ingrediente=$bebida";
        $declaracion=$conexion->prepare($sql);
        $declaracion->execute();
    ?>
    <div class="orden">
        <h2>Pedido numero:</h2>
        <hr>
        <h4>Detalles: </h4>
        <hr>
        <ul>
            <p>Datos del cliente</p>
            <li>Nombre: <?php echo $_GET[nombre] ?></li>
            <li>Mesa: <?php echo $_GET[mesa] ?></li>
            <hr>
        </ul>
        <ol>
            <p>Ingredientes/Precio</p>
            
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <li><?php echo $resultado[1]." - ".$resultado[2] ?></li>
                
                <?php
                    
                    $total=$total+$resultado[2];
            }
            ?>
            <li>Total: <?php echo " - ".$total ?></li>
            
        </ol>  
    </div>
    
    </body>
</html>