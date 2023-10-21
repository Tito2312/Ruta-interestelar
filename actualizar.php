<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <script src="https://kit.fontawesome.com/f5ce703e18.js" crossorigin="anonymous"></script>
    <title>ESENCIA DE CAFÉ</title>
</head>
<body>
<div class="vueltaInicio">
        <a href="index.html"><i class="fa-solid fa-angles-left"></i> Volver al inicio</a>
    </div>
<div class="formulario">
    <h2>Editar Cliente</h2>
    <form method="post" action="php/actualizar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value=""><br>

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value=""><br>

        <label for="correo_electronico">Correo Electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" value=""><br>

        <input type="submit" name="actualizar" value="Actualizar">
    </form>
    </div>
</body>
</html>