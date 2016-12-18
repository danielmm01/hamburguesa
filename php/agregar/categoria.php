<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
if($id==""){
    $id="null";
}

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="insert into tb_categoria(id_categ,nombre) values($id,'$nombre')";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$sql;
    echo "<script>alert('error al ingresar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos ingresados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>