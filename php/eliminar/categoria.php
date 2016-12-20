<?php
require_once('../class.conexion.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $modelo=new conexion();
    $conexion=$modelo->get_conexion();
    $sql="delete from tb_categoria where id_categ=$id";
    $declaracion=$conexion->prepare($sql);
    if(!$declaracion->execute()){
        echo "<script>alert('error al eliminar registro');window.history.go(-1);</script>";
    }else{
        echo "<script>alert('registro eliminado correctamente');window.history.go(-1);</script>";
    }
}
?>