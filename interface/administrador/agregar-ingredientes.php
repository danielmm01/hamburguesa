<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/interface.css">     
    </head>
    <body>
    <?php include ('nav.php');?>
    <main>
        <form action="../../php/agregar/ingrediente.php" method="post">
            <h3>Agregar Ingredientes</h3>
            <label for="id"> Clave: </label>
            <input type="text" id="id" name="id" placeholder="Clave">
            <label for="nombre">*Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="precio">*Precio:</label>
            <input type="text" id="precio" name="precio" placeholder="Precio" required>
            <label for="id">*Categoria:</label>
            <?php
            include('../../php/class.conexion.php');
            $modelo=new conexion();
            $conexion=$modelo->get_conexion();
            $sql="select * from tb_categoria";
            $decalaracion=$conexion->prepare($sql);
            $decalaracion->execute();
            ?>
            <select name="id_categ" id="id_categ">
            <option value="">-- Selecionar categoria</option>
            <?php
            while($resultado=$decalaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
                $conexion=null;
                $decalaracion=null;
            ?>
            </select>
            <input type="submit" value="Ingresar">
        </form>
    </main> 
    </body>
</html>