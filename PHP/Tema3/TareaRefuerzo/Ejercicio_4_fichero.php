<?php

/*

  Modifica el ejercicio anterior, para que los valores se pasen mediante un formulario.
Los números se introducen en un fichero, y se pasan al fichero suma.php que hace la
comprobación y muestra la suma por pantalla.

*/

$fich = fopen("numeros.txt", "r");
$formato = "%s %d"; // Define el formato para leer cadena y entero
if($fich == FALSE){
    echo "No se encuentra el fichero o no se pudo leer<br>";
}else{
    while(true){

        $valores = fscanf($fich, $formato, $num1, $num2);

        if($valores === false){
            break;
        }
    }
    if(isset($num1, $num2) && is_numeric($num1) && is_numeric($num2)){

        // Definimos la función
    
        function suma($a, $b){
            return $a + $b;
        }
    
       echo "El resultado de la suma " . $num1 . " y " . $num2 . " es " . suma($num1,$num2);
    
    }else{
        echo "Error: Los parámetros introducidos no son numéricos.";
    }
        
}


/*
    Con esta ruta, podremos usar 

 http://localhost/Ejercicios/Tema3/TareaRefuerzo/suma.php?num1=5&num2=5
 */