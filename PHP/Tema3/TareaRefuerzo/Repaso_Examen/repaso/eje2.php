<?php

    if(isset($_GET['nombre'])){
        echo "Hola " . $_GET['nombre']; 
    }else{
        echo "No se ha pasado ningún nombre";
    }

?>