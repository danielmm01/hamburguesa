<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Iniciar sesion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/tobe.css">
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="shortcut icon" href="../../img/hamburguesa22.png">

    </head>
    <body>
       <header>
            <h1>DennyBurger</h1>
            <p>Inicia sesion</p>
        </header>
        <?php include('nav2.php'); ?>
        <main class="tobe">
            <form action="../../php/validar_sesion" method="post">
               <h2>Iniciar sesion como administrador</h2>
               <img src="../../img/hamburguesa1car.png" alt="">
                <input type="text" placeholder="Clave" name="id">
                <input type="password" placeholder="Contraseña" name="pass">
                <input type="submit" value="Iniciar sesion">
            </form>
        </main>
    </body>
</html>