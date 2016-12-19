<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/interface.css">
        <link rel="shortcut icon" href="../../img/hamburguesa22.png">
    </head>
    <body>
       <?php include('nav.php'); ?>
        <main>
            <?php
            require_once('../../php/class.conexion.php');
            $modelo=new conexion();
            $conexion=$modelo->get_conexion();
            $sql="SELECT a.id_ingrediente,a.nombre,a.precio,b.nombre from tb_ingrediente a 
            LEFT JOIN tb_categoria b on b.id_categ=a.id_categ";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <table border="1">
               <tr>
                   <th colspan="4">Ingredientes</th>
               </tr>
               <tr>
                   <th>Clave</th>
                   <th>Nombre</th>
                   <th>Precio</th>
                   <th>Categoria</th>
               </tr>
                <?php
                while($resultado=$declaracion->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $resultado[0] ?></td>
                        <td><?php echo $resultado[1] ?></td>
                        <td><?php echo $resultado[2] ?></td>
                        <td><?php echo $resultado[3] ?></td>
                    </tr>
                    <?php
                }
            $conexion=null;
            $declaracion=null;
                ?>
            </table>
        </main>
    </body>
</html>