<?php

/*

    Escribe un fichero que reciba dos parámetros, num1 y num2, y muestre su suma. Hay que comprobar que los dos argumentos existan y sean números.

*/


if(isset($_GET["num1"], $_GET["num2"]) && is_numeric($_GET["num1"]) && is_numeric($_GET["num2"])){

    // Definimos la función

    function suma($a, $b){
        return $a + $b;
    }

    $num1 = (float)$_GET["num1"];
    $num2 = (float)$_GET["num2"];

   echo "El resultado de la suma " . $num1 . " y " . $num2 . " es " . suma($num1,$num2);

}else{
    echo "Error: Los parámetros introducidos no son numéricos.";
}

/*
    Con esta ruta, podremos usar 

 http://localhost/Ejercicios/Tema3/TareaRefuerzo/suma.php?num1=5&num2=5
 */
