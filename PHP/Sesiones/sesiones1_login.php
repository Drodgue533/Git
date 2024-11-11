<?php

define('USUARIO',0);
define('ADMIN',1);

// Función para comprobar el usuario y la contraseña

function comprobar($nombreUsuario, $password)
{

    // Comprobamos si el usuario es "usuario" y la contraseña es "1234"

    if ($nombreUsuario === "usuario" && $password === "1234") {
        $user['nombreUsuario'] = "usuario";
        $user['rol'] = USUARIO;
        return $user;

        // Comprobamos si el usuario es "admin" y la contraseña es "admin"

    } else if ($nombreUsuario === "admin" && $password === "admin") {
        $user['nombreUsuario'] = "admin";
        $user['rol'] = ADMIN;
        return $user;
    } else {
        return FALSE;
    }
}

// Verificamos que el método de la petición sea POST correctamente

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $user = FALSE;
    // Comprobamos si el usuario y contraseña son correctos
    if(isset($_GET['usuario']) && $_GET['password']){
        $user = comprobar($_GET['usuario'], $_GET['password']);
    }

    if ($user == FALSE) {
        // Guardamos el nombre del usuario que intentó iniciar sesión
        if(isset($_GET['usuario'])){
            $usuario = $_GET['usuario'];
        }
    } else {
        // Iniciamos la sesión y guardamos el usuario en $_SESSION
        session_start();
        $_SESSION['usuario'] = $user['nombreUsuario']; 
        // Redirigimos al usuario a la página principal
        header("Location: sesiones1_principal.php");

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>

<body>
   <?php
     if(empty($_GET["usuario"]) || empty($_GET["password"] )){
        echo "<p>Haga login para continuar</p>";
     }
   ?>
   <?php
   if(isset($err) && $err == true){
    echo "<p> revise usuario y contraseña</p>";
   } 
   ?>
    <form name="formulario" method="get">
       
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>