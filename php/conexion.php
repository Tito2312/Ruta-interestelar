<?php

    $conexion = mysqli_connect("localhost", "root", "", "esenciacafe");

    if ($conexion) {
        echo 'conectado correctamente';
    }else{
        echo 'no se ha podido conectar';
    }

?>