<?php

$hamburguesa = "Pan, carne, queso, tomate";
$ingredientes = explode(", ", $hamburguesa);

    foreach ($ingredientes as $key) {
        echo $key . "\n";
    }
    foreach ($ingredientes as $key) {
        echo $key;
    }
?>