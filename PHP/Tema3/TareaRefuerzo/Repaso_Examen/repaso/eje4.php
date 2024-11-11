<?php

    if(isset($_POST['num1']) && isset($_POST['num2']) && is_numeric($_POST['num1']) && is_numeric(($_POST['num2']))){

function suma($a, $b){
    return $a + $b;
}

    echo "La suma de los números es " . suma($_POST['num1'], $_POST['num2']);

    }else{
        echo "Introduce 2 números";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Suma de números</h3>
    <form method="post">
        Número 1: <input type="text" name="num1"><br>
        Número 2: <input type="text" name="num2"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>