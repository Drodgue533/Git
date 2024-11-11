<?php
// Solicitar el nombre al usuario
echo "Por favor, ingresa tu nombre: ";

// Leer la entrada del usuario desde la consola
$nombre = trim(fgets(STDIN)); // 'trim()' elimina espacios o saltos de línea innecesarios

// Mostrar un mensaje de bienvenida
echo "Hola, $nombre!\n";
?>
