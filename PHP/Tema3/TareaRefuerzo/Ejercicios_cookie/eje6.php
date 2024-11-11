<?php

    // Comprobamos que se ha subido un archivo

    if(isset($_FILES['archivo'])){

        // Nombre archivo

        $nombreOriginal = $_FILES['archivo']['name'];

        // Nombre temporal

        $nombreTemporal = $_FILES['archivo']['tmp_name'];

        // Mostramos los nombres

        echo "Nombre original: " . $nombreOriginal . "<br>";
        echo "Nombre temporal: " . $nombreTemporal . "<br>";
    }else{
        echo "No se ha subido ningún archivo.";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Fichero</title>
</head>
<body>
    <h3>Subir un archivo</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo"  required>
        <br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>