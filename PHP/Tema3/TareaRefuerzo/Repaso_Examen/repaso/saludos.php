<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellidos'] = $_POST['apellidos'];

        echo "Hola " . $_SESSION['nombre'] . $_SESSION['apellidos'];
    }

    session_destroy();

?>