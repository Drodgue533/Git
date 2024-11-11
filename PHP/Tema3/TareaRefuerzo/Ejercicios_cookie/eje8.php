<?php
if(isset($_POST['color'])){
    $color = $_POST['color'];
}else{
    $color = 'white';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
    
    <form action="" method="post">

    <label><input type="radio" name="color" value="white" <?php if($color === 'white');?>>Blanco</label>
    <br>
    <label><input type="radio" name="color" value="red" <?php if($color === 'red');?>>Rojo</label>
    <br>
    <label><input type="radio" name="color" value="black" <?php if($color === 'black');?>>Negro</label>
    <br>
    <label><input type="radio" name="color" value="green" <?php if($color === 'green');?>>Verde</label>
    <br>
    <button type="submit" value="Cambiar Color">Cambiar Color</button>
    </form>

</body>
</html>