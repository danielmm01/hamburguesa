<?php
require_once('class.conexion.php');
$id=$_POST['id'];
$pass=$_POST['pass'];
// LAS SIGUIENTES VARIABLES CAMBIAN SEGUN EL FORMULARIO EL CUAL SE ESTA VALIDANDO
        $tb = "tb_administrador";
        $login = "../interface/administrador/login.php";
        $interface = "../interface/administrador/inicio.php";
        $id_tb = "id_administrador";
        $nombre_tb = "nombre";
        $pass_tb = "pass";
        $sms_error1 = "Id de administrador y/o contraseña incorrectas";
        if(isset($id)){
            //conectar con la bd
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            //consultar si los datos son correctos
            $sql = "SELECT * FROM $tb WHERE $id_tb='$id' and $pass_tb='$pass'";
            $declaracion = $conexion->prepare($sql);
            $declaracion->execute();
            $fila=$declaracion->fetch();
            //OPCIÓN 1: Si el usuario NO existe o los datos son INCORRRECTOS
            if (!$fila[$id_tb]){ //<------------	
                echo "<script>alert('$sms_error1');window.location=\"$login\";</script>";
            }
            //OPCIÓN 2: Usuario logueado correctamente
            else{
                //Definimos las variables de sesión y redirigimos a la página de usuario
                session_start();
                $_SESSION["$id_tb"] = $fila["$id_tb"];
                $_SESSION["$nombre_tb"] = $fila["$nombre_tb"];
                echo "<script>alert('Bienvenido, $fila[nombre]');window.location=\"$interface\";</script>";
            } 
        }
        else{
            header("location:$login");
        }
        //liberar resultados y cerrar la conexion
        $modelo=null;
        $conexion=null;
        $declaracion=null;
?>