<?php
$conexion = mysqli_connect("localhost", "root", "", "esenciacafe");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$query = "INSERT INTO cliente(cc, nombre, direccion, apellido, telefono, correo_electronico, contrasena) 
          VALUES ('$cedula', '$nombre', '$direccion', '$apellido', '$telefono', '$correo', '$contrasena')";

if (mysqli_query($conexion, $query)) {
    echo '<script>window.location.href = "../index.html";</script>';
} else {
    echo "Error en el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>