<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="../../css/tobe.css">
      <link rel="shortcut icon" href="../../img/hamburguesa22.png">

      </head>
       <body>
      <header>
        <h1>DennyBurger</h1>
         <p>Arma tu Hamburguesa</p>
    </header>
      <?php include('nav.php'); ?>
      <header class="M">¡Arma tu Hamburgueza!</header>
    <form class="" action="IMPRECION2.php" method="get">
      <label clasS="F" for="">Selecciona tu Carne:</label><br>
      <input class="L" list="Carnes" name="LC" />
        <datalist id="Carnes">
            <option label="Arrachera" value="Arrachera">
            <option label="Sirloin" value="Sirloin">
            <option label="Sirloin Doble" value="Sirloin Doble">
            <option label="Arrachera Doble" value="Arrachera Doble">
        </datalist><br>
        <label class ="F" for="">Selecciona tu Pan:</label><br>
        <input class="L" list="Pan" name="LP" />
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
          <input class="V" type="checkbox" name="Captsup" value="Captsup">Captsup
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
          <input class="L" list="Bebida" name="LB" />
            <datalist id="Bebida">
                <option label="Cocacola 600ml" value="Cocacola 600ml">
                <option label="Horchata 500ml" value="Horchata 500ml">
                <option label="Jamaica 500ml" value="Jamaica 500ml">
                <option label="Corona 1/2" value="Corona 1/2">
            </datalist><br>
      </select>
      <label class="F">Ingresa tu numero de mesa:</label><br>
      <select class="L" name="LME">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select><br>
      <label class="F" for="">Ingresa tu nombre:</label><br>
      <input class="L" type="text" name="nombre" value="" placeholder="Nombre"><br>
      <label class="F">Ingresa el nombre del mesero:</label><br>
      <select class="L" name="LM">
        <option value="Fernando">Fernando</option>
        <option value="Ignacio">Ignacio</option>
        <option value="Pedro">Pedro</option>
        <option value="Juan">Juan</option>
        <option value="Daniel">Daniel</option>
      </select>
      <input class="L" type="submit" name="Ordenar" value="Ordenar">
    </form>
</html>