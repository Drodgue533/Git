<?php

/*
Crea un archivo php (saludar.php) que nos salude al solicitar al servidor dicho archivo.
Habrá que pasar en la url los parámetros ‘nombre’ y tu nombre, de forma que al acceder a
dicho archivo a través del servidor, nos salude con el nombre que hemos pasado.
Habrá que indicar la ruta a dicho archivo.php así como el parámetro que le pasamos.
*/

echo "Hola" . " " . $_GET["nombre"];


/*
    Con esta ruta, podremos usar 

 http://localhost/Ejercicios/Tema3/TareaRefuerzo/saludar.php?nombre=Daniel

 */