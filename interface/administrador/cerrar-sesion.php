<?php
session_start();
$login="login.php";
if($_SESSION){	
    session_unset();
	session_destroy();
	header("location:$login");
}
else{
	header("location:$login");
}
?>