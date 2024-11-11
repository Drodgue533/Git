<?php
// Verificamos si se han enviado los datos correctamente por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']); // Limpiamos el input por seguridad
    $apellidos = htmlspecialchars($_POST['apellidos']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
</head>
<body>

    <h2>¡Hola, <?php echo $nombre . ' ' . $apellidos; ?>!</h2>
    <p>¡Es un placer saludarte!</p>

</body>
</html>
