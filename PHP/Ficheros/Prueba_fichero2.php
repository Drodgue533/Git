<?php

$fich = fopen("fichero_ejemplo.txt", "r");
$formato = "%s %d";
if ($fich === FALSE){
    echo "No se encuentra el fichero o no se pudo leer <br>";
}else{
    /*
    while( !feof($fich)){
        $car = fgetc($fich);
        echo $car;
    }
    */
    /*  
      while( !feof($fich)){
        
        $valores = fscanf($fich,$formato);
        print_r($valores);

      }
    */
    
    while (!feof($fich) ){
        $valores = fscanf($fich, $formato, $var1, $var2);
        echo "Cadena: " . $var1 . " Número: " . $var2 . "<br>";
    }
    
   
}
fclose($fich);

?>