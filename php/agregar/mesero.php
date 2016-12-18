<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
if($id==""){
    $id="null";
}

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="insert into tb_mesero(id_mesero,nombre,app,apm) values($id,'$nombre','$app','$apm')";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$app.$apm.$sql;
    echo "<script>alert('error al ingresar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos ingresados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>