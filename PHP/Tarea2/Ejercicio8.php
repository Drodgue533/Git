<?php

    // Daniel Rodríguez Guerra

$a;
$b == $a;

function manejarErrores($errno, $str, $file, $line){
    echo "Ocurrió el error: $errno";
}
echo set_error_handler("manejarErrores");
    
?>