<?php

$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['user']=='usuario' && $_POST['pass'] =='1234'){
        echo "index.html";
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
    <title>Formulario Usuario y Contraseña</title>
</head>
<body>
    <form method="post">
        Usuario: <input type="text" name="user" required><br>
        Contraseña: <input type="password" name="pass" required><br>
        <button type="submit">Enviar</button>
    </form>
    <?php if($error == true && $_POST['user'] != "usuario"){
        echo "Usuario incorrecto.";
    }else if($error == true && $_POST['pass'] != "1234"){
        echo "Contraseña incorrecta";
    }
    ?>
</body>
</html>