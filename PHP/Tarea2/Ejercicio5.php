<?php

    // Daniel Rodríguez Guerra

$a = '10';
$b = '20';

$i = 0;

function suma($valor1,$valor2){
    return $valor1 + $valor2;
}  
function resta($valor1,$valor2){
    return $valor1 - $valor2;
}
function multiplicar($valor1, $valor2){
    return $valor1 * $valor2;
} 

switch($i){
    case 0:
     
        echo suma($a, $b) . "\n"; 
        break;
    case 1:
     
        echo resta($b, $a) . "\n";
        break;
    case 2:
     
        echo multiplicar($a, $b) . "\n";
        break;
}

?>