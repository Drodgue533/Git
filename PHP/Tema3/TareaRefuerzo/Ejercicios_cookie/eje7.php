<?php

    // Comprobamos que se ha subido un archivo

    if(isset($_FILES['archivo'])){

        if($_FILES['archivo']['error'] === UPLOAD_ERR_OK){

            // Nombre, tamaño y tipo del archivo

            $nombreArchivo = $_FILES['archivo']['name'];
            $tamañoArchivo = $_FILES['archivo']['size'];
            $tipoArchivo = $_FILES['archivo']['type'];

            echo "El nombre del archivo es: " . $nombreArchivo . "<br>";
            echo "El tamaño del archivo es: " . $tamañoArchivo . "bytes" . "<br>";
            echo "El tipo del archivo es: " . $tipoArchivo;

        }else{
            echo "Error en la subida. Código de error: " . $_FILES['archivo']['error'];
        }
        
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