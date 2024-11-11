<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si se marca "Recordar mis datos", guardar las credenciales en cookies
    if (isset($_POST['recordar'])) {
        setcookie('usuario', $_POST['usuario'], time() + (3600 * 30)); 
        setcookie('contraseña', $_POST['contraseña'], time() + (3600 * 30)); 
        header("Location: Eje9.php");
    } else {
        // Si no se quiere recordar, eliminar las cookies
        setcookie('usuario', '', time() - 3600 * 30);
        setcookie('contraseña', '', time() - 3600 * 30);
        header("Location: Eje9.php");
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Iniciar sesión</h3>
    <form action="" method="post">
        Usuario: <input type="text" name="usuario" value="<?php if(isset($_COOKIE['usuario'])) echo $_COOKIE['usuario']; ?>" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <input type="checkbox" name="recordar" <?php if(isset($_COOKIE['usuario'])) echo 'checked'; ?>> Recordar mis datos<br>
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

