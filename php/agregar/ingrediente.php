<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$app=$_POST['precio'];
$apm=$_POST['id'];
if($id==""){
    $id="null";
}

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="insert into tb_ingrediente(id_ingrediente,nombre,precio,id_categ) values($id,'$nombre','$precio','$id_categ')";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$precio.$id_categ.$sql;
    echo "<script>alert('error al ingresar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos ingresados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>