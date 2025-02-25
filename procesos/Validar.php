<?php
if(isset($_POST['consultar'])){
 $usuario = $_POST['correo'];
 $contra = $_POST['pasword'];
 

require_once 'conexion.php';
$sql = "select*from registro where Correo ='$usuario' and pasword='$contra'";
$resultado = $conexion->query($sql);
$filas = mysqli_num_rows($resultado);
if($filas>0){

    header("location:../index.html");

}else{
		
    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
    
    echo "<script>location.href='../Registro.php'</script>";

    
}
$conexion->close();
}




?>