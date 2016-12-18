<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
  <head>
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
    <meta charset="utf-8">
    <title>ORDEN</title>
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
        <td><?php echo $_GET['Captsup'] ?></td>
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
        <td><h4>Mesa</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['LME'] ?></td>
      </tr>
      <tr>
        <td><h4>Nombre</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['nombre'] ?></td>
      </tr>
      <tr>
        <td><h4>Mesero</h4></td>
      </tr>
      <tr>
        <td><?php echo $_GET['LM'] ?></td>
      </tr>
    </table>
  </body>
</html>
