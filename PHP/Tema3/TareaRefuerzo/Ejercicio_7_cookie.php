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

       <label> <input type="radio" name="color" value="white" <?php if($color === 'white') echo 'checked';?>>Blanco</label>
       <br>
       <label> <input type="radio" name="color" value="red" <?php if($color === 'red') echo 'checked';?>>Rojo</label>
       <br>
       <label> <input type="radio" name="color" value="yellow" <?php if($color === 'yellow') echo 'checked';?>>Amarillo</label>
       <br>
       <input type="submit" value="Cambiar Color">
    </form>
</body>
</html>