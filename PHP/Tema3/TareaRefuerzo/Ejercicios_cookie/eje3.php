<?php

    if(isset($_GET['num1'], $_GET['num2']) && is_numeric($_GET['num1']) && is_numeric($_GET['num2'])){

            function suma($num1, $num2){
                return $num1 + $num2;
            }

    $num1 = (FLOAT)$_GET['num1'];
    $num2 = (FLOAT)$_GET['num2'];

    echo "La suma de los numeros " . $num1 . " y " . $num2 . " es " . suma($num1,$num2);

    }else{

        echo "Error: Alguno de los parámetros introducidos no es numérico";

    }

?>