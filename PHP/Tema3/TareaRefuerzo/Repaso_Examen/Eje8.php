<?php

if (isset($_POST['color'])) {
    setcookie('color', $_POST['color'], time() + (3600 * 30));  
    header("Location: Eje8.php");
} else{
    setcookie('color', 'white', time() + (3600 * 30));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Color</title>
    <style>
        body{
            background-color: <?php echo $_COOKIE['color'] ?>;
        }
    </style>
</head>
<body >
    <h3>Elige el color de fondo</h3>

    <form action="Eje8.php" method="post">
        <label><input type="radio" name="color" value="white" <?php if ($_COOKIE['color'] === 'white') echo 'checked'; ?>> Blanco</label><br>
        <label><input type="radio" name="color" value="red" <?php if ($_COOKIE['color'] === 'red') echo 'checked'; ?>> Rojo</label><br>
        <label><input type="radio" name="color" value="green" <?php if ($_COOKIE['color'] === 'green') echo 'checked'; ?>> Verde</label><br>
        <label><input type="radio" name="color" value="blue" <?php if ($_COOKIE['color'] === 'blue') echo 'checked'; ?>> Azul</label><br>
        <button type="submit">Cambiar Color</button>
    </form>
</body>
</html>
