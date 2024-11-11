<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_FILES['archivo']['error'] != 4){

        echo "Nombre " . $_FILES['archivo']['name'] . "<br>";
        echo "Nombre temporal " . $_FILES['archivo']['tmp_name'] . "<br>";
    }else{
        echo "No se ha subido ningún archivo.";
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
    <h3>Subir Archivo</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo"><br>
        <button type="submit">Subir Archivo</button>
    </form>
</body>
</html>