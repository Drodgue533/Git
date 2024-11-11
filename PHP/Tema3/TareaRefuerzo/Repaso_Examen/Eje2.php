<?php

    if(empty($_GET['nombre'])){
        echo "Error: Introduce un nombre. Modo de uso 'nombre=tunombre'";
    }else{
        echo "Hola " . $_GET['nombre'];
    }

?>