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
       <?php
        include('../../php/class.conexion.php');
        $id=$_GET['id'];
        $modelo=new conexion();
        $conexion=$modelo->get_conexion();
        $sql2="SELECT a.id_ingrediente,a.nombre,a.precio,b.nombre,b.id_categ from tb_ingrediente a 
        LEFT JOIN tb_categoria b on b.id_categ=a.id_categ where a.id_ingrediente=$id";
        $decalaracion2=$conexion->prepare($sql2);
        $decalaracion2->execute();
        $resultado2=$decalaracion2->fetch();
        ?>
        <form action="../../php/modificar/ingrediente.php?id=<?php echo $_GET['id'] ?>" method="post">
            <h3>Agregar Ingredientes</h3>
            <label for="id"> Clave: </label>
            <input type="text" id="id" name="id" placeholder="Clave" value="<?php echo $resultado2[0] ?>">
            <label for="nombre">*Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required value="<?php echo $resultado2[1] ?>">
            <label for="precio">*Precio:</label>
            <input type="text" id="precio" name="precio" placeholder="Precio" required value="<?php echo $resultado2[2] ?>">
            <label for="id">*Categoria:</label>
            <?php
            
            
            $sql="select * from tb_categoria";
            
            $decalaracion=$conexion->prepare($sql);
            $decalaracion->execute();
            ?>
            <select name="id_categ" id="id_categ">
            <option value="<?php echo $resultado2[4] ?>"><?php echo $resultado2[3] ?></option>
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
            <input type="submit" value="Editar">
        </form>
    </main> 
    </body>
</html>