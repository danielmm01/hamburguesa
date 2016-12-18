<?php
require("Conexion.php");
require("Funcion.php");
$usuario=$_POST["usuario"];
    $contraseña=$_POST["pass"];
$contador=buscusuario($usuario,$contraseña);
if($contador==0)
{
    echo"usuario no identificado";
}
else
{
    echo"usuario identificado";
}
     ?>