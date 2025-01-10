<?php

// Datos básicos apra acceder a la base de datos

$servername = "localhost";
$username = "gestor";
$password = "secreto";
$database = "proyecto";

// Crear una conexión

$conexion = new mysqli($servername, $username, $password, $database);

// Verificar si la conexion es exitosa

try {
    if ($conexion->connect_error) {
        throw new Exception("Error de conexion: " . $conexion->connect_error);
    }
    echo "conexión exitosa<br>";

    // Iniciar la transacción

    $conexion->begin_transaction();

    // Consultar todas las unidades

    $consulta = "SELECT * FROM productos WHERE nombre_corto = 'PAPYRE62GB'";

    $Producto = $conexion->query($consulta);

    if (!$Producto) {
        throw new Exception("Error de conexion: " . $conexion->connect_error);
    }

    // Recorremos los resultados utilizando fetch_assoc()

    while ($producto = $Producto->fetch_assoc()) {

        // Almacenamos el producto en una variable

        $productoBuscado = $producto;

        // Mostramos la información del producto

        echo "Id: " . $producto['id'] . "<br>";
        echo "Nombre: " . $producto['nombre'] . "<br>";
        echo "Nombre corto: " . $producto['nombre_corto'] . "<br>";
        echo "Descripcion: " . $producto['descripcion'] . "<br>";
        echo "PVP: " . $producto['pvp'] . "<br>";
    }

    // Obtenemos la id del producto

    $idProducto = $productoBuscado['id'];

    // Comprobar el stock actual de la tienda 1

    $consultarStock1 = "SELECT unidades FROM stocks WHERE producto = $idProducto AND tienda = 1";
    $resultadoStock1 = $conexion->query($consultarStock1);

    if (!$resultadoStock1) {
        throw new Exception("Error tratando de ver el stock de tienda 1: " . $conexion->error);
    }

    // Sí el producto existe en la tienda 1, actualizamos el stock

    if ($resultadoStock1->num_rows > 0) {

        // Creamos la actualización del producto

        $updateStock1 = "UPDATE stocks SET unidades = 1 WHERE producto = $idProducto AND tienda = 1";

        // Ejecutamos la actualización del producto

        $updateStock1 = "UPDATE stocks SET unidades = 1 WHERE producto = $idProducto AND tienda = 1"; 

        if(!$conexion->query($updateStock1)) {
            throw new Exception("Error al actualizar el stock en la tienda 1 :" . $conexion->error);
        }

    } else {
        throw new Exception("Error al actualizar el stock en la tienda 1: " . $conexion->error);
    }

    // Comprobar si ya existe el stock en la tienda 2

    $consultarStock2 = "SELECT unidades FROM stocks WHERE producto = $idProducto AND tienda = 2";
    $resultadoStock2 = $conexion->query($consultarStock2);

    if (!$resultadoStock2){
        throw new Exception("Error tratando de ver el stock de tienda 2: " . $conexion->error);
    }

    // Sí el producto ya existe en la tienda 2, lo actualizamos

    if($resultadoStock2->num_rows > 0){
        $updateStock2 = "UPDATE stocks SET unidades = 2 WHERE producto = $idProducto AND tienda = 2";
        if(!$conexion->query($updateStock2)){
            throw new Exception("Error al actualizar el stock en la tienda 2: " . $conexion->error);
        }
    }else{

        // Sí el proudcto no existe, lo insertamos

        $insertarStock2 = "INSERT INTO stocks (producto, tienda, unidades) VALUES ($idProducto, 2, 2)";
        if(!$conexion->query($insertarStock2)){
            throw new Exception("Error al insertar el stock en la tienda 2: " . $conexion->error);
        }
    }

    // Si todo salió bien, confirmamos la transacción

    $conexion->commit();
    echo "Transacción completada exitosamente.<br>";


     // Consultar los datos de las tiendas

     echo "<br><strong>Datos actualizados de las tiendas:</strong><br>";

     $consultarStocks = "SELECT tienda, unidades FROM stocks WHERE producto = $idProducto";
     $resultadoStocks = $conexion->query($consultarStocks);
 
     if ($resultadoStocks->num_rows > 0) {
         while ($stock = $resultadoStocks->fetch_assoc()) {
             echo "Tienda: " . $stock['tienda'] . ", Unidades: " . $stock['unidades'] . "<br>";
         }
     } else {
         echo "No se encontraron registros de stock para el producto.<br>";
     }

     // Cerrar la conexión

    $conexion->close();
} catch (Exception $e) {

    // Revertir la transacción en caso de error

    $conexion->rollback();

    echo "Transacción fallida: " . $e->getMessage() . "<br>";

    // Cerrar la conexión

    $conexion->close();
}
