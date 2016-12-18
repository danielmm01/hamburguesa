<?php
require_once ('config.php');
class conexion{
	public function get_conexion(){
		$conexion = new PDO(dsn, usuario_bd, pass_bd);
        $conexion->exec("set names utf8");
		return $conexion;
	}
}
?>