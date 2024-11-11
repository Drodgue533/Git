<?php



$cadena = "Desarrollo de aplicaciones web";

function busqueda($cadena)
{

    if (preg_match('web', $cadena) === 0) {
        throw new Exception("La palabra 'web' no se encuentra en la cadena.");
    } else {
        echo "La palabra 'web' se encuentra en la cadena";
    }
}
try {

    busqueda($cadena);
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}
