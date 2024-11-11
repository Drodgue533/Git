<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Saludo</title>
</head>
<body>
    <h3>Introduce tus datos</h3>
    <form action="saludo.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Apellidos: <input type="text" name="apellidos" required><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>