<?php
    include 'conexion.php'

    $nombre = $_POST['nombre']
    $correo = $_POST['correo']
    $contraseña = $_POST['contrasena']

    $query = "INSERT INTO usuarios(nombre, correo, contraseña)
            VALUES('$nombre','$correo', '$contrasena')";

    $ejecutar = mysqli_query($query)
?>