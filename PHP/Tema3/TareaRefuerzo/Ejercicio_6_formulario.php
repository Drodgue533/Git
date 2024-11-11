<?php

// Verificamos si se ha subido

if (isset($_FILES['archivo'])) {

    // Nombre archivo

    $nombreOriginal = $_FILES['archivo']['name'];
    
    // Nombre temporal

    $nombreTemporal = $_FILES['archivo']['tmp_name'];

    // Mostramos el nombre original y el temporal
    
    echo "Nombre original del archivo: " . $nombreOriginal . "<br>";
    echo "Nombre original del archivo: " . $nombreTemporal . "<br>";

} else {
    echo "No se ha subido ningún archivo.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir un Archivo</title>
</head>
<body>

    <h2>Subir un archivo</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" required> 
        <br><br>
        <input type="submit" value="Subir Archivo"> 
    </form>