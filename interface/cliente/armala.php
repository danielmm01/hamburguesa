<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/tobe.css">
  </head>
  <?php include('nav.php'); ?>
  <body>
      <header class="M">¡Arma tu Hamburgueza!</header>
    <form class="" action="IMPRECION.php" method="get">
      <label clasS="F" for="">Selecciona tu Carne:</label><br>
      <input class="L" list="Carnes" name="LC" placeholder="Selecciona tu Carne" />
        <datalist id="Carnes">
            <option label="Arrachera" value="Arrachera">
            <option label="Sirloin" value="Sirloin">
            <option label="Sirloin Doble" value="Sirloin Doble">
            <option label="Arrachera Doble" value="Arrachera Doble">
        </datalist><br>
        <label class ="F" for="">Selecciona tu Pan:</label><br>
        <input class="L" list="Pan" name="LP" placeholder="Selecciona tu Pan"/>
          <datalist id="Pan">
              <option label="Ajo" value="Ajo">
              <option label="Normal" value="Normal">
              <option label="Rostizado" value="Rostizado">
          </datalist><br>
          <label claSs="F" for="">Selecciona tus Vegetales:</label><br>
          <input class="V" type="checkbox" name="Cebolla" value="Cebolla">Cebolla
          <input class="V" type="checkbox" name="Tomate" value="Tomate">Tomate
          <input class="V" type="checkbox" name="Lechuga" value="Lechuga">Lechuga
          <input class="V" type="checkbox" name="Pepinillo" value="Pepinillo">Pepinillo<br>

         <label class="F" for="">Selecciona tus Ingredientes:</label><br>
          <input class="V" type="checkbox" name="Catsup" value="Catsup">Catsup
          <input class="V" type="checkbox" name="Mostaza" value="Mostaza">Mostaza
          <input class="V" type="checkbox" name="Guacamole" value="Guacamole">Guacamole
          <input class="V" type="checkbox" name="Chimichurri" value="Chimichurri">Chimichurri<br>

         <label class="F" for="">Hazla que se desborde de Queso:</label><br>
          <input class="V" type="checkbox" name="Manchego" value="Manchego">Manchego
          <input class="V" type="checkbox" name="Hebra" value="Hebra">Hebra
          <input class="V" type="checkbox" name="Jalapeño" value="Jalapeño">Jalapeño
          <input class="V" type="checkbox" name="Amarillo" value="Amarillo">Amarillo<br>

         <label class="F" for="">Quieres que pique:</label><br>
          <input class="V" type="checkbox" name="Rajas" value="Rajas">Chile en rajas
          <input class="V" type="checkbox" name="Guacapicoso" value="Guacapicoso">Guacapicoso
          <input class="V" type="checkbox" name="Mexicana" value="Mexicana">Mexicana<br>

         <label class="F" for="">Agregale lo Delicioso:</label><br>
          <input class="V" type="checkbox" name="Tocino" value="Tocino">Tocino
          <input class="V" type="checkbox" name="Jamon" value="Jamon">Jamon
          <input class="V" type="checkbox" name="Piña" value="Piña">Piña
          <input class="V" type="checkbox" name="Chorizo" value="Chorizo">Chorizo<br>

          <label class="F" for="">Selecciona tu Bebida:</label><br>
          <input class="L" list="Bebida" name="LB" placeholder="Selecciona tu Bebida" />
            <datalist id="Bebida">
                <option label="Cocacola 600ml" value="Cocacola 600ml">
                <option label="Horchata 500ml" value="Horchata 500ml">
                <option label="Jamaica 500ml" value="Jamaica 500ml">
                <option label="Corona 1/2" value="Corona 1/2">
            </datalist><br>
      </select>
      <label class="F" for="">Ingresa tu Colonia:</label><br>
      <input class="L" type="text" name="colonia" value="" placeholder="Colonia"><br>
      <label class="F" for="">Ingresa tu Calle:</label><br>
      <input class="L" type="text" name="calle" value="" placeholder="Calle"><br>
      <label class="F" for="">Ingresa tu Numero de Casa:</label><br>
      <input class="L" type="text" name="numero" value="" placeholder="Numero de Casa"><br>
      <label class="F" for="">Ingresa Color de tu casa:</label><br>
      <input class="L" type="text" name="color" value="" placeholder="Color de Casa">
      <label class="F" for="">Ingresa tu celular:</label><br>
      <input class="L" type="text" name="celular" value="" placeholder="Celular">
      <label class="F" for="">Ingresa tu Nombre:</label><br>
      <input class="L" type="text" name="nombre" value="" placeholder="Nombre">
      <input class="L" type="submit" name="Ordenar" value="Ordenar">
    </form>
  </body>
</html>
