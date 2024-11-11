<?php

    // Daniel Rodríguez Guerra

$a = '10';
$b = '20';

function suma($valor1,$valor2){
    return $valor1 + $valor2;
}


function resta($valor1,$valor2){
    return $valor1 - $valor2;
}

function multiplicar($valor1, $valor2){
    return $valor1 * $valor2;
}

echo suma($a, $b) . "\n"; 

echo resta($b, $a) . "\n";

echo multiplicar($a, $b) . "\n";

?>