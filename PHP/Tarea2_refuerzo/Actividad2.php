<?php

    //Array que contenga meses del año por estación

    $años= ["Marzo" => "Primavera", "Abril" => "Primavera", "Mayo" => "Primavera", "Junio" => "Verano", "Julio" => "Verano", "Agosto" => "Verano" , "Septiembre" => "Otoño", "Octubre" => "Otoño", "Noviembre" => "Otoño", "Diciembre" => "Invierno", "Enero" => "Invierno", "Febrero" => "Invierno"];

    foreach ($años as $mes =>$estaciones) {
        echo $mes . "\t" . $estaciones . "\n";
    }

    //Imprime el array con la funcion var_dump

    var_dump($años);

    //Recorre el array e imprime los meses correspondientes a una estación del año

    
    //Imprime el número de elementos que contiene el array

    echo count($años) . "\n";

    //Imprime solo los valores del array

    $año= ["Primavera" => "Marzo, Abril y Mayo", "Verano" => "Junio, Julio y Agosto", "Otoño" => "Septiembre, Octubre y Noviembre", "Invierno" => "Diciembre, Enero y Febrero"];

      foreach ($año as $estaciones) {
          echo $estaciones . "\n";
      }
?>