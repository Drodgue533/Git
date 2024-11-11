
<?php

    /*
    Crea un formulario en el que se introducirá usuario y contraseña. En el mismo fichero se
    comprobará si estos son correctos y en ese caso mandará a la página index.html, (no es
    necesario crearla), en caso contrario generará un error (pondrá la variable $error a true).
    En el formulario se deberá comprobar si la variable error ha sido inicializada, es decir,
    contiene un valor, y si es así, indicar con un mensaje que ha ocurrido algún error.
    */

    $error = false;
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['usuario'] === "usuario" && $_POST['password'] === "1234"){
            header("Location: index.html");
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<form action="" method="post">
    Usuario: <input type="text" name="usuario" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <button type="submit">Iniciar sesión</button>
</form>
<?php if($error == true && $_POST['usuario'] != "usuario"){ 
    echo "Usuario incorrecto. Por favor, compruebalo.";}else if($error == true && $_POST['password'] != "1234"){
        echo "Contraseña incorrecta. Por favor, compruébalo.";
    } ?>
</body>
</html>