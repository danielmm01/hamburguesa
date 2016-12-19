<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/tobe.css">
    <link rel="stylesheet" href="../../css/formulario-interface.css">
    <link rel="shortcut icon" href="../../img/hamburguesa22.png">

  </head>
  <body>
  <header>
        <h1>DennyBurger</h1>
         <p>Arma tu Hamburguesa</p>
    </header>
  <?php include('nav.php'); ?>
    <main>
        <form class="armala" action="imprimir.php">
            <h3>Selecciona los ingredientes</h3>
            <hr>
            <label for="pan">Pan:</label>
            <?php
            include('../../php/class.conexion.php');
            $modelo=new conexion();
            $conexion=$modelo->get_conexion();
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='pan'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="pan" id="pan">
            <option value="">-- Seleccionar pan --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
            <input type="submit" value="Pedir Orden">
        </form>    
    </main>
    </body>
</html>
