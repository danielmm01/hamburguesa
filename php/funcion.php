<?php
function buscusuario($c,$d)
{
    global $conexion;
$consulta="select * from tblogin where cveusuar='$c' && cvecontras='$d'";
$sql2=$conexion->prepare($consulta);
$sql2->execute();
$contador=0;
while($registro=$sql2->fetch(PDO::FETCH_BOTH))
{
    $contador=$contador+1;
}
    return $contador;
}
?>