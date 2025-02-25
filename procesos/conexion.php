<?php 
$conexion = new mysqli('localhost','root','','proyecto');

if($conexion->connect_errno){
    echo"sin conexion a la bd";
}
?>