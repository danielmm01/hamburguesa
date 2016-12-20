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
        $sql2="SELECT * from tb_mesero where id_mesero=$id";
        $decalaracion2=$conexion->prepare($sql2);
        $decalaracion2->execute();
        $resultado2=$decalaracion2->fetch();
        ?>
        <form action="../../php/modificar/mesero.php?id=<?php echo $_GET['id'] ?>" method="post">
            <h3>Editar Mesero</h3>
            <label for="id"> Clave: </label>
            <input type="text" id="id" name="id" placeholder="Clave" value="<?php echo $resultado2[0] ?>">
            <label for="nombre">*Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required value="<?php echo $resultado2[1] ?>">
            <label for="app">*Appellido paterno:</label>
            <input type="text" id="app" name="app" placeholder="app" required value="<?php echo $resultado2[2] ?>">
            <label for="apm">*apellido materno:</label>
            <input type="text" id="apm" name="apm" placeholder="apm" required value="<?php echo $resultado2[3] ?>">
            <?php
            
            ?>
            
            <input type="submit" value="Editar">
        </form>
    </main> 
    </body>
</html>