<?php
include('../class.conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$id_categ=$_POST['id_categ'];
if($id==""){
    $id="null";
}
$clave=$_GET['id'];

$modelo= new conexion();
$conexion = $modelo->get_conexion();

$sql="update tb_ingrediente set id_ingrediente=$id,nombre='$nombre',precio=$precio,id_categ=$id_categ where id_ingrediente = $clave";
$declaracion=$conexion->prepare($sql);
if(!$declaracion->execute()){
    echo $id.$nombre.$precio.$id_categ.$sql;
    echo "<script>alert('error al modificar datos');window.history.go(-1);</script>";
}else{
    echo "<script>alert('datos modifiados correctamente');window.history.go(-1)</script>;";
}
$conexion=null;
$declaracion=null;
?>