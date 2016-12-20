<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
if($id==""){
    $id="null";
}
$clave=$_GET['id'];

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="update tb_categoria set id_categ=$id,nombre='$nombre' where id_categ = $clave";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$sql;
    echo "<script>alert('error al modificar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos modifiados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>