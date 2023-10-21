<?php
$conexion = mysqli_connect("localhost", "root", "", "esenciacafe");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$correo = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM cliente WHERE correo_electronico = '$correo'";

$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) == 1) {
    $fila = mysqli_fetch_assoc($resultado);
    if (password_verify($contrasena, $fila['contrasena'])) {
        $mensaje = "Inicio de sesión exitoso. ¡Bienvenido, " . $fila['nombre'] . "!";
        echo '<script>alert("' . $mensaje . '");</script>';
        echo '<script>setTimeout(function() { window.location.href = "../index.html"; }, 500);</script>';
    } else {
        echo "Contraseña incorrecta. Inténtalo de nuevo.";
    }
} else {
    echo "Correo electrónico no encontrado. Regístrate si eres nuevo.";
}

mysqli_close($conexion);
?>