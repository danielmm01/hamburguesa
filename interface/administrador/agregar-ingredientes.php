<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="../../css/interface.css">     
    </head>
    <body>
    <?php include ('nav.php');?>
    <main>
     <form action="" method="post">
       <h3>Agregar Ingredientes<h3>
        <label for="id"> clave: </label>
        <input type="text" id="id" name="id" placeholder="Clave">
        <label for="nombre">*Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="nombre">
        <label for="app">*Precio:</label>
        <input type="text" id="app" name="app" placeholder="precio">
        <label for="apm">*Categoria:</label>
        <input type="text" id="apm" placeholder="categoria">
        <input type="submit" value="ingresar">
        </form>
    </main>
   
    
    </body>
</html>