<?php
// contacto.php
// Capturar sección enviada por GET
$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Página Educativa PHP</title>
</head>
<body>
    <h1>Contacto - Página Educativa PHP</h1>

    <!-- Navegación usando GET -->
    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a> |
        <a href="index.php?seccion=Unidades">Unidades</a> |
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <hr>

    <!-- Mostrar sección seleccionada -->
    <?php
    if ($seccion != '') {
        echo "<h2>Sección seleccionada: $seccion</h2>";
    }
    ?>

    <hr>

    <!-- Formulario de contacto usando POST -->
    <h2>Formulario de Contacto</h2>
    <form action="contacto.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="correo" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Capturar datos enviados por POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';

        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: $nombre <br>";
        echo "Correo: $correo <br>";
    }
    ?>
</body>
</html>
