<?php

    // Daniel Rodríguez Guerra

    $nombreCompleto = "Daniel*Rodríguez*Guerra";

    list($nombre, $apellido1, $apellido2) = explode('*', $nombreCompleto);

    echo $nombre;

    /*
    Un array es una estructura que puede almacenar muchos valores en una sola variable, 
   permitiendo índices numéricos o letras. Por otro lado, una lista es un término más informal que generalmente se refiere a un array indexado numéricamente. 
    Ambos pueden contener diferentes tipos de datos, pero los arrays son la implementación específica en PHP.
    */
?>