<?php

/*
Modifica el ejercicio anterior para comprobar si se ha pasado el parámetro ‘nombre’, de
forma que si no se ha pasado muestre un mensaje indicando que no se ha introducido el
nombre, y en caso contrario, un mensaje de saludo.
*/

if(empty($_GET["nombre"])){
    echo "Error: no se ha introducido el nombre.";
}else{
    echo "Hola" . " " . $_GET["nombre"];
}

/*
    Con esta ruta, podremos usar 

 http://localhost/Ejercicios/Tema3/TareaRefuerzo/saludar2.php?nombre=Daniel

 -Sí quitamos el nombre, podemos comprobar que el mensaje de error funciona correctamente
*/