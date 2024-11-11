<?php
     if(!empty($_POST['num1']) && !empty($_POST['num2']) && is_numeric($_POST['num1']) && is_numeric($_POST['num2'])){

        function suma($a, $b){
            return $a + $b;
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "La suma es " . suma($num1, $num2);

    }else{
        echo "Introduce dos números.";
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
    <h1>Formulario suma</h1>
    <form action="Eje4.php" method="post">
        Número 1: <input type="text" name="num1" required><br>
        Número 2: <input type="text" name="num2" required><br>
        <button type="submit">Sumar</button>
    </form>
</body>
</html>