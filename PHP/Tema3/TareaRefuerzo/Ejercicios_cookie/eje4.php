<?php

    if(isset($_POST['num1'], $_POST['num2']) && is_numeric($_POST['num1']) && is_numeric($_POST['num2'])){

        function suma($numero1, $numero2){
            return $numero1 + $numero2;
        }
    
        $num1 = (FLOAT)$_POST['num1'];
        $num2 = (FLOAT)$_POST['num2'];

        echo "La suma de los números " . $num1 . " y " . $num2 . " es " . suma($num1,$num2);

    }else{
        echo "Error: Por favor, introduce 2 números.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de números</title>
</head>
<body>
    <h2>Formulario para Sumar Números</h2>
    <form action="eje4.php" method="post">
    Número 1: <input type="text" name="num1" required><br>
    Número 2: <input type="text" name="num2" required><br>
    <button type="submit">Sumar<button>
    </form>
</body>
</html>