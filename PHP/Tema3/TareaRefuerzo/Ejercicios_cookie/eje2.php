<?php

    if(empty($_GET['nombre'])){

        echo "Error: No se ha introducido ningún nombre, por favor introduzca uno.";

    }else{

        echo "Hola " . $_GET['nombre'];

    }

?>