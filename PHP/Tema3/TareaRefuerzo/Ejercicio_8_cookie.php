<?php
// Verificamos si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Si el usuario marca "Recordar usuario"
    if (isset($_POST['recordar'])) {
        // Guardamos las cookies por 30 días
        setcookie('usuario', $usuario, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
    } else {
        // Si no quiere que se recuerden los datos, eliminamos las cookies
        setcookie('usuario', '', time() - 3600, "/");
        setcookie('password', '', time() - 3600, "/");
    }
}

// Si existen cookies, las utilizamos para rellenar los campos
$usuario_guardado = isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : '';
$password_guardada = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar Usuario</title>
</head>
<body>
    
    <form action="" method="post">
        Usuario: <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuario_guardado); ?>" required><br>
        Contraseña: <input type="password" name="password" value="<?php echo htmlspecialchars($password_guardada); ?>"><br>
        <!-- Checkbox "Recordar usuario", marcado si la cookie 'usuario' existe -->
        <input type="checkbox" name="recordar" <?php if ($usuario_guardado) echo 'checked'; ?>> Recordar usuario<br>
        <button type="submit">Iniciar sesión</button>
    </form>

</body>
</html>
