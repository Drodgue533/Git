<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
}else{
    header("Location: Eje10.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h3>Hola, <?php echo $nombre . ' ' . $apellidos; ?>!</h3>
    <p> Bienvenido a nuestra página</p>
    <a href="Eje10.php">Volver</a>
</body>
</html>