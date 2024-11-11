<?php

// Comprobamos que se ha subido un archivo
if (isset($_FILES['archivo'])) {

    // Revisamos si hay algún error en la subida
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        
        // Nombre original del archivo
        $nombreOriginal = $_FILES['archivo']['name'];

        // Tipo MIME del archivo
        $tipoArchivo = $_FILES['archivo']['type'];

        // Tamaño del archivo en bytes
        $tamañoArchivo = $_FILES['archivo']['size'];

        // Nombre temporal donde se ha subido el archivo en el servidor
        $nombreTemporal = $_FILES['archivo']['tmp_name'];

        // Mostramos la información del archivo
        echo "Nombre original del archivo: " . $nombreOriginal . "<br>";
        echo "Tipo de archivo: " . $tipoArchivo . "<br>";
        echo "Tamaño del archivo: " . ($tamañoArchivo / 1024) . " KB<br>";
        echo "Nombre temporal en el servidor: " . $nombreTemporal . "<br>";

        // (Opcional) Mover el archivo a una carpeta en el servidor
        $destino = 'uploads/' . $nombreOriginal;
        if (move_uploaded_file($nombreTemporal, $destino)) {
            echo "El archivo se ha subido y movido correctamente a: " . $destino;
        } else {
            echo "Error al mover el archivo.";
        }

    } else {
        // Manejo de errores durante la subida
        echo "Error en la subida del archivo. Código de error: " . $_FILES['archivo']['error'];
    }

} else {
    echo "No se ha subido ningún archivo.";
}
?>
