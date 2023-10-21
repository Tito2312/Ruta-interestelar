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
        <form action="php/registrarUsuario.php" method="POST">
        <h2>Registro de Usuario</h2>
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <div>
            <input type="submit" value="Registrar">
            <a class="iniciaS" href="login.php">Inicia sesión</a>
        </div>
    </form>
    </div>
</body>
</html>