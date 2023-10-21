<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/f5ce703e18.js" crossorigin="anonymous"></script>
    <title>ESENCIA DE CAFÉ</title>
</head>
<body>
    <div class="vueltaInicio">
        <a href="index.html"><i class="fa-solid fa-angles-left"></i> Volver al inicio</a>
    </div>
    <div class="formulario">
        <form action="php/login.php" method="POST">
        <h2>Iniciar Sesión</h2>
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        
        <div>
            <input id="btnInicioSesion" type="submit" value="Iniciar Sesión">
            <a href="registro.php">¿no tienes cuenta?</a>
        </div>
    </form>
    </div>
</body>
</html>