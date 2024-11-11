<?php

    //Meses del año

    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    //Mostrar los meses

    foreach ($meses as $mes) {
       echo $mes . "\n";
    }

    //Ordenar los meses en forma ascendente

    sort($meses);

   foreach ($meses as $mes){
      echo $mes . "\n";
   }

   //Poner un nombre en mayúscula con la orden

   $mes = $meses[0];

   echo strtoupper($mes);
    


?>