<?php

$valor = 10;

function numeroImpar($numero)
{
    if ($numero % 2 == 0) {
        echo "El número introducido es par";
    } else {
        throw new Exception("El número introducido es impar");
    }
}

try {

    numeroImpar($valor);
} catch (Exception $e) {

    echo "Exception: " . $e->getMessage();
}
