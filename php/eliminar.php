<?php
$conexion = mysqli_connect("localhost", "root", "", "esenciacafe");

// Verifica la conexión
if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Procesa el formulario cuando se envía
if (isset($_POST['borrar'])) {
    // Obtiene la cédula ingresada por el usuario
    $cedula = $_POST['cedula'];

    // Realiza la eliminación del usuario en la base de datos
    // (Debes completar esta parte según tu estructura de base de datos)
    $delete_query = "DELETE FROM cliente WHERE cc = '$cedula'";

    if (mysqli_query($conexion, $delete_query)) {
        echo "Usuario con cédula $cedula ha sido eliminado con éxito.";
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conexion);
    }
}
?>