<?php


function calcular($operacion, $a, $b) {
    return $operacion($a, $b);
}


function suma($a, $b) {
    return $a + $b;
}

echo calcular('suma', 5, 3); 
?>