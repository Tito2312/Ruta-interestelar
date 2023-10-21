<?php
$conexion = mysqli_connect("localhost", "root", "", "esenciacafe");

// Verifica la conexión
if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Procesa el formulario cuando se envía
if (isset($_POST['actualizar'])) {
    // Obtiene los datos actualizados del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $correo_electronico = $_POST['correo_electronico'];

    // Actualiza los datos del cliente en la base de datos
    // (Debes completar esta parte según tu estructura de base de datos)
    $update_query = "UPDATE cliente SET nombre = '$nombre', cc = '$cedula', correo_electronico = '$correo_electronico' WHERE cc = $cedula";

    if (mysqli_query($conexion, $update_query)) {
        echo "Los datos del cliente se actualizaron con éxito.";
    } else {
        echo "Error al actualizar los datos del cliente: " . mysqli_error($conexion);
    }
}
?>