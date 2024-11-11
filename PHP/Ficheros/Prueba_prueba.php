<?php

$fich = fopen("fichero_ejemplo.txt", "r");
$formato = "%s %d";  // Define el formato para leer cadena y entero
if ($fich === FALSE) {
    echo "No se encuentra el fichero o no se pudo leer <br>";
} else {
    // Usar un bucle para leer el archivo línea por línea
    while (true) {
        // Intentar leer con fscanf
        $valores = fscanf($fich, $formato, $var1, $var2);
        
        // Verificar si se leyeron valores válidos
        if ($valores === false) {
            break;  // Rompe el bucle si no hay más datos
        }
        
        // Mostrar las variables leídas
        echo "Cadena: " . $var1 . ", Número: " . $var2 . "<br>";
    }
}

fclose($fich);

?>
