<?php

$hamburguesa = "Pan, carne, queso, tomate";
$ingredientes = explode(", ", $hamburguesa);
$ingredienteArray=[];

foreach ($ingredientes as $key) {
    $ingredienteArray[] =$key;
}
foreach ($ingredienteArray as $key){
    echo $key;
}




?>