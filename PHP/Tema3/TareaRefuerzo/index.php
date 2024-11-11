<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de saludo</title>
</head>
<body>

    <h2>Introduce tus datos</h2>

    <form action="saludo.php" method="post">
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellidos: <input type="text" name="apellidos" required><br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
