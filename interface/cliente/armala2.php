<!DOCTYPE html>
<html>
  <head>
       <link rel="shortcut icon" href="15493939_979595068840697_1772920421_n.png">
    <meta charset="utf-8">
    <title>Restaurant</title>
    <style media="screen">
    *{
    margin: 0px;
    padding: 0px;
    }
    .H{
      background: #000;
      color: #900000;
      font-size: 90px;
      font-family:impact;
      text-align: center;
    }
    .M{
      height: 40px;
      background: #880000;
      color: #FFF;
      font-size: 30px;
      font-family:monospace;;
      text-align: center;
    }
    form{
      width: 450px;
      background: #330000;
      height: 970px;
      margin:10px auto;
      padding: 25px;
      border-radius: 50px;
      color: #fff;
      font-size: 20px;
      font-family:cursive;
    }
    .L{
      margin-top: 15px;
      margin-bottom: 15px;
      width: 440px;
      height: 30px;
      border: 0px;
      background: #990000;
      color: white;
      font-size: 20px;
      font-family: monospace;
    }
    .V{
      margin-top: 15px;
      margin-bottom: 15px;
      width: 15px;
      height: 20px;
      border: 0px;
      background: #990000;
      color: white;
      font-size: 30px;
      font-family: monospace;
        }
    .F{

      color:gold;
      font-size: 25px;
      font-family: monospace;
        }
        body{
            background:url(15570988_979595075507363_1446596343_n.jpg)
        }
        .I{
          height: 50px;
          background: #000;
          color: #FFF;
        }
        .Z{
          width: 200px;
          height: 50px;
          border: 0px;
          background-color: #880000;
          font-size: 20px;
          color:#fff;
        }
    </style>
  </head>
  <body>
    <header class="H">NachoBurguer</header>
    <center><header class="I">
      <a href="INICIO.html"><input class="Z" type="button" name="Inicio" value="Inicio"></a>
      <a href="MENU.html"><input class="Z" type="button" name="Menu" value="Menu"></a>
      <a href="https://www.facebook.com/"><input class="Z" type="button" name="Facebook" value="Facebook"></a>
      <a href="UBICACION.html"><input class="Z" type="button" name="Ubicacion" value="Ubicacion"></a>
      <a href="CONTACTO.html"><input class="Z" type="button" name="Contactanos" value="Contactanos"></a>
    </header></center>
      <header class="M">¡Arama tu Hamburgueza!</header>
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
  </body>
</html>