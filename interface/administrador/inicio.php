<?php
//variables de sesion utilizadas
$id_tb="id_administrador";
$nombre_tb="nombre";
$login = "login.php";

//evitar que php me notifique por variables indefinidas
error_reporting(E_ALL ^ E_NOTICE);

//iniciar sesion
session_start();
//validar si se esta ingresando con sesion correctamente
if(!$_SESSION[$id_tb]){
    header("location:$login");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/interface.css">
    </head>
    <body>
       <nav>
          <h2>Menu: Administradores</h2>
          <hr>
           <ul>
               <li><a href="">Agregar mesero</a></li>
               <li><a href="">Listar meseros</a></li>
           </ul>
       </nav>
       <header>
           <p>Administrador: <?php echo $_SESSION["nombre"]; ?></p>
       </header>
        <main>
            
        </main>
    </body>
</html>