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
        <form action="../../php/agregar/ingrediente.php" method="post">
            <h3>Agregar Ingredientes</h3>
            <label for="id"> Clave: </label>
            <input type="text" id="id" name="id" placeholder="Clave">
            <label for="nombre">*Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="precio">*Precio:</label>
            <input type="text" id="precio" name="precio" placeholder="Precio" required>
            <label for="id">*Categoria:</label>
            <input type="text" id="categoria" name="categoria" placeholder="Categoria" required>
            <input type="submit" value="Ingresar">
        </form>
    </main> 
    </body>
</html>