<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sesiones.php" method="post">
        <label>Nombre:
            <input type="text" name="nombre" required>
        </label><br>
        <label>Apellidos:
            <input type="text" name="apellidos" required>
        </label><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos'])){
        session_start();
        $_SESSION['nombre']= $_POST['nombre'];
        $_SESSION['apellidos'] = $_POST['apellidos'];
        header("Location: sesiones2.php");
    }else{

    }
 }

?>