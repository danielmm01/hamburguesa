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
        <form class="armala" action="imprimir2.php">    
            <h3>Selecciona los ingredientes y ordena</h3>
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
            <option value="0">-- Seleccionar pan --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
            
             <label for="carne">carne:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='carne'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="carne" id="carne">
            <option value="0">-- Seleccionar carne --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
             <label for="salsa">salsa:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='salsa'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="salsa" id="salsa">
            <option value="0">-- Seleccionar salsa --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
             <label for="carne_fria">carne fria:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='carne fria'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="carne_fria" id="carne fria">
            <option value="0">-- Seleccionar carne fria --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
             <label for="adrezos">aderezos:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='aderezoz'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="aderezos" id="aderezos">
            <option value="0">-- Seleccionar aderezo --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
             <label for="vegetal">vegetal:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='vegetal'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="vegetal" id="vegetal">
            <option value="0">-- Seleccionar vegetal --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
            </select>
             <label for="queso">queso:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='queso'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="queso" id="queso">
            <option value="0">-- Seleccionar queso --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            
            ?>
           </select>
             <label for="bebida">bebida:</label>
            <?php
            $sql="select a.id_ingrediente,a.nombre from tb_ingrediente a left join tb_categoria b on b.id_categ=a.id_categ where b.nombre='bebida'";
            $declaracion=$conexion->prepare($sql);
            $declaracion->execute();
            ?>
            <select name="bebida" id="bebida">
            <option value="0">-- Seleccionar bebida --</option>
            <?php
            while($resultado=$declaracion->fetch()){
                ?>
                <option value="<?php echo $resultado[0] ?>"><?php echo $resultado[1] ?></option>
                <?php
            }
            ?>
            </select>
            <label for="nombre">*Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="mesa">*mesa:</label>
            <input type="text" id="mesa" name="mesa" placeholder="mesa" required>
            
            <input type="submit" value="Pedir Orden">
        </form>    
    </main>
    </body>
</html>