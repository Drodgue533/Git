<?php

/*
Modifica el ejercicio anterior, para que los valores se pasen mediante un formulario.
Los números se introducen en un formulario, y se pasan al fichero suma.php que hace la
comprobación y muestra la suma por pantalla.
*/

// Si se han recibido los datos del formulario
if (isset($_POST["num1"], $_POST["num2"]) && is_numeric($_POST["num1"]) && is_numeric($_POST["num2"])) {
    
    // Definimos la función
    function suma($a, $b) {
        return $a + $b;
    }

    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];

    echo "El resultado de la suma " . $num1 . " y " . $num2 . " es " . suma($num1, $num2);
} else {
    echo "Error: Los parámetros introducidos no son numéricos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Números</title>
</head>
<body>
    <h2>Formulario para Sumar Números</h2>
    <form action="Ejercicio_4_formulario.php" method="post">
        Número 1: <input type="text" name="num1" required><br>
        Número 2: <input type="text" name="num2" required><br>
        <button type="submit">Sumar</button>
    </form>
</body>
</html>
