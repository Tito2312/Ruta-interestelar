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
    <h2>Borrar Usuario</h2>
    <form method="post" action="php/eliminar.php">
        <label for="cedula">Cédula del Usuario a Borrar:</label>
        <input type="text" id="cedula" name="cedula" required><br>

        <input type="submit" name="borrar" value="Borrar">
    </form>
    </div>
</body>
</html>