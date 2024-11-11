<?php

    if(isset($_GET['num1']) && isset($_GET['num2']) && is_numeric($_GET['num1']) && is_numeric(($_GET['num2']))){

function suma($a, $b){
    return $a + $b;
}

    echo "La suma de los números es " . suma($_GET['num1'], $_GET['num2']);

    }else{
        echo "Introduce 2 números";
    }

?>