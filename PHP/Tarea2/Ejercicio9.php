<?php

    // Daniel Rodríguez Guerra

$a = 4;

function mayorCinco ($valor){

if($valor > 5){
    echo "El número es mayor a 5";
}else{
    throw new Exception('El número es menor a 5.');
}
}

try{
    mayorCinco($a);

}catch(Exception $e){
    echo "Exception: " . $e->getMessage();
}

?>