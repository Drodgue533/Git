<?php

$diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sab" => "Sabado", "Dom" => "Domingo"];


    foreach($diasSemana as $dia){
        echo $dia . "<br>";
    }

unset($diasSemana[0]);
    echo "<br>";
    foreach($diasSemana as $dia){
        echo $dia . "<br>";
    }

?>