<?php

    $error = false;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST['usuario'] == 'usuario' && $_POST['pass'] == '1234'){
            header("Location: index.html");
        }else{
            $error = true;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Usuario y Contraseña</h3>
    <form method="post">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="pass" required><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if($error == true && $_POST['usuario'] != 'usuario'){
        echo "Usuario incorrecto";
    }
    if($error == true && $_POST['pass'] != '1234'){
        echo "Contraseña incorrecta";
    }

    ?>
</body>
</html>