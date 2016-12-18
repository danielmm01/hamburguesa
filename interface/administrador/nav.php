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
        <nav>
          <h2>Menu: Administradores</h2>
          <hr>
           <ul>
               <li><a href="agregar-mesero.php">Agregar mesero</a></li>
               <li><a href="">Listar meseros</a></li>
               <li><a href="">Agregar Ingredientes</a></li>
               <li><a href="">Listar Ingredientes</a></li>
               <li><a href="cerrar-sesion.php">Cerrar sesion</a></li>
           </ul>
       </nav>
       <header>
           <p>Administrador: <?php echo $_SESSION["nombre"]; ?></p>
       </header>