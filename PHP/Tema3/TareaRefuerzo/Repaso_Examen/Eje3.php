<?php

    if(!empty($_GET['num1']) && !empty($_GET['num2']) && is_numeric($_GET['num1']) && is_numeric($_GET['num2'])){

        function suma($a, $b){
            return $a + $b;
        }

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        echo "La suma de " . $num1 . " y " . $num2 . " es " . suma($num1,$num2);
    }else{
        echo "Error: Introduce bien la forma de sumar";
    }

?>