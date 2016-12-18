<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ORDEN</title>
    <style media="screen">
      *{
        margin: 0px;
        padding: 0px;
      }
      body{
          background: #880000;
          font-size: 15px;
          font-style: oblique;
          font-family: monospace;
      }
      table{
        border-color: #fff;
        margin: 10px;
        border: solid 5px;
        border-radius: 7px;
        padding: 10px;
      }

      h4{
        font-size: 20px;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>DETALLE ORDEN</td>
      </tr>
      <tr>
        <td><h4>Carne</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['LC'] ?></td>
      </tr>
      <tr>
        <td><h4>Pan</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['LP'] ?></td>
      </tr>
      <tr>
        <td><h4>Vegetales</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Cebolla'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Tomate'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Lechuga'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Pepinillo'] ?></td>
      </tr>
      <tr>
        <td><h4>Aderezos</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Catsup'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Mostaza'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Guacamole'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Chimichurri'] ?></td>
      </tr>
      <tr>
        <td><h4>Quesos</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Manchego'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Hebra'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Jalapeño'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Amarillo'] ?></td>
      </tr>
      <tr>
        <td><h4>Salsas</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Rajas'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Guacapicoso'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Mexicana'] ?></td>
      </tr>
      <tr>
        <td><h4>Extras</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Tocino'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Jamon'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Piña'] ?></td>
      </tr>
      <tr>
        <td><?php echo $_GET['Chorizo'] ?></td>
      </tr>
      <tr>
        <td><h4>Bebida</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['LB'] ?></td>
      </tr>
        <tr>
          <td>DIRECCIÓN</td>
        </tr>
        <tr>
          <td><h4>Colonia</h4></td>
        </tr>
      <tr>
        <td><?php echo $_GET['colonia'] ?></td>
      </tr>
      <tr>
        <td><h4>Calle</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['calle'] ?></td>
      </tr>
      <tr>
        <td><h4>Numero</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['numero'] ?></td>
      </tr>
      <tr>
        <td><h4>Color</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['color'] ?></td>
      </tr>
      <tr>
        <td><h4>Celular</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['celular'] ?></td>
      </tr>
      <tr>
        <td><h4>Nombre</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['nombre'] ?></td>
      </tr>
    </table>
  </body>
</html>
