<?php

    session_start();
    echo "Hola, " . $_SESSION['nombre'] . " " . $_SESSION['apellidos'];

?>