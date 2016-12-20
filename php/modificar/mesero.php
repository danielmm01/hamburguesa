<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
if($id==""){
    $id="null";
}
$clave=$_GET['id'];

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="update tb_mesero set id_mesero=$id,nombre='$nombre',app='$app',apm='$apm' where id_mesero = $clave";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$app.$apm.$sql;
    echo "<script>alert('error al modificar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos modifiados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>