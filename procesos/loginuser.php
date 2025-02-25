
<?php
if (isset($_POST['enviado'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contra = $_POST['pasword'];

    require_once('conexion.php');
    $stmt = $conexion->prepare("INSERT INTO registro (Nombre, Apellido, Correo, pasword) VALUES (?,?,?,?)");
    $stmt->bind_param($nombre, $apellido, $correo, $contra);
    $conexion->close();
    echo '<script>alert("ESTE USUARIO SE A REGISTRADO CON EXITO")</script> ';
    echo $nombre . $apellido . $correo . $contra;
    echo "<script>location.href='../login.php'</script>";
}
?>

