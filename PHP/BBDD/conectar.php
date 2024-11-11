<?php

/*
    1. Conéctate a la base de datos ‘empresa’ que creamos en una actividad anterior.
Para ello:
a) guarda los elementos de la variable $cadena (necesarios para conectarnos a la base de
datos ‘empresa’), en una lista.
$cadena= 'mysql:dbname=empresa;host=127.0.0.1'*'root'*'';
b) Con los elementos de la lista, realiza la conexión a la bbdd.
2. Captura y genera una excepción si no es posible conectarse a la bbdd, indicando “Conexión
a la base de datos ‘empresa’ fallida”.
$cadena = "mysql:dbname=empresa;host=127.0.0.1";
$usuario = 'root';
$clave = '';
3. Introduce en la tabla Usuario, los siguientes registros, comprobando que la inserción se ha
realizado correctamente e indica el número de registros insertados en la tabla. En caso
contrario, muestra el mensaje de error correspondiente.
a) Usuario1, User1, 1
b) Usuario2, User2, 1
c) Usuario3, User2, 1
d) Usuario4, User1, 1
e) Root1, rot1, 0

*/

// Datos de conexión

$cadena = "mysql:dbname=empresa;host=127.0.0.1";
$usuario = 'root';
$clave = '';

try {

    // Conectar a la base de datos con PDO

    $bbdd = new PDO($cadena, $usuario, $clave);

    // Establecer el modo de errores 

    $bbdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión realizada con éxito<br>";

    // Definir la consulta SQL
    // Insertar nuevos usuarios

    $sql = "INSERT INTO usuarios (nombre, clave, rol) VALUES 
            ('Usuario1', 'User1', 1),
            ('Usuario2', 'User2', 1),
            ('Usuario3', 'User2', 1),
            ('Usuario4', 'User1', 1),
            ('Root1', 'rot1', 0)";

    // Ejecutar la consulta de inserción

    $insertados = $bbdd->exec($sql);

    // exec devuelve el número de filas afectadas


    if ($insertados) {
        echo "$insertados registros insertados correctamente en la tabla 'usuarios'.<br>";
    } else {
        echo "No se insertaron registros en la tabla 'usuarios'.<br>";
    }
} catch (PDOException $e) {

    echo "Conexión a la base de datos 'empresa' fallida: " . $e->getMessage();
}

/*
4. Muestra los registros de la tabla Usuarios para ver los cambios realizados
*/
// realizamos la consulta

$consulta = "SELECT * FROM usuarios";
$resultado = $bbdd->query($consulta); // Ejecutamos la consulta

// Recorremos el resultado paso a paso
foreach ($resultado as $fila) {
    $id = $fila['id'];
    $nombre = $fila['nombre'];
    $clave = $fila['clave'];
    $rol = $fila['rol'];
}

/*
5. Obtén de la tabla Usuarios aquellos registros cuyo rol sea=0.
*/

// Preparamos la consulta

$preparada = $bbdd->prepare("SELECT nombre FROM usuarios WHERE rol = 0");

// Ejecutamos

$preparada->execute(array(0));

// Mostrar el número de usuarios

echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";

// Recorrer los resultados y mostrar los nombres

foreach ($preparada as $usu) {
    echo "Nombre: " . $usu['nombre'] . "<br>";
}


/*
    6. Haz lo mismo, pero desarrollando una consulta que permita, cada vez que se ejecute, pasar
los parámetros que queramos sin tener que modificar la consulta, en este caso el rol.
(Utilizando para los parámetros ‘?’)
*/

// Preparamos la consulta

$preparada = $bbdd->prepare("SELECT nombre FROM usuarios WHERE rol = ?");

// Ejecutamos

$preparada->execute(array(0));

// Mostrar el número de usuarios

echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";

// Recorrer los resultados y mostrar los nombres

foreach ($preparada as $usu) {
    echo "Nombre: " . $usu['nombre'] . "<br>";
}
/*
    7. Borra de la tabla Usuarios aquellos registros cuyo nombre contengan la palabra “Usuario”
excepto aquellos que la clave sea User1. Hazlo mediante una consulta interactiva, que
permita indicar la clave de los registros a borrar. Tendrás que comprobar que la consulta se
ha realizado correctamente, y mostrar por pantalla el número de registros afectados, pero en
este caso, utilizando el método ‘exec’; o el mensaje de error correspondiente en caso
contrario.*/

try {

    // Guardamos la condicion que queremos borrar

    $clave = 'User1';

    // Consulta preparada

    $consulta = "DELETE FROM usuarios WHERE nombre LIKE '%Usuario%' AND clave != :clave";
    $preparada = $bbdd->prepare($consulta);


    $registros_afectados = $preparada->execute(array(':clave' => $clave));

    // Mostrar el número de registros afectados

    echo "Registros eliminados: " . $registros_afectados . "<br>";
} catch (PDOException $e) {
    echo "Error al eliminar registros: " . $e->getMessage();
}

/* 8. Actualiza los datos de Root1, para que la clave sea root1. */

$user = 'Root1';
$pass = 'root1';

//Consulta

$consul = "UPDATE usuarios SET clave = :pass WHERE nombre = :user";
$preparada = $bbdd->prepare($consul);

// Ejecutamos la consulta

$preparada->execute(array(
    ':nueva_pass' => $pass,
    ':user ' => $user
));

// 9. Muestra los registros de la tabla Usuarios para ver los cambios realizados, utilizando ‘fetch’.

// Preparamos la consulta

$consulta = "SELECT * FROM usuarios";
$preparada = $bbdd->prepare($consulta);

$preparada->execute();

echo "<h3>Registros en la tabla Usuarios:</h3>";

// Mostramos cada campo de registro

while ($fila = $preparada->fetch(PDO::FETCH_ASSOC)) {

    echo "ID: " . $fila['id'] . "<br>";
    echo "Nombre: " . $fila['nombre'] . "<br>";
    echo "Clave: " . $fila['clave'] . "<br>";
    echo "Rol: " . $fila['rol'] . "<br>";
    echo "<hr>";
}

// 10. Vuelve a mostrar los registros con ‘fetch’, y utilizando la opción PDO::FETCH_OBJ.

$consulta = "SELECT * FROM usuarios";
$preparada = $bbdd->prepare($consulta);

$preparada->execute();

echo "<h3>Registros en la tabla Usuarios:</h3>";

// Mostramos cada campo de registro
while ($fila = $preparada->fetch(PDO::FETCH_OBJ)) {
    echo "ID: " . $fila->id . "<br>";
    echo "Nombre: " . $fila->nombre . "<br>";
    echo "Clave: " . $fila->clave . "<br>";
    echo "Rol: " . $fila->rol . "<br>";
    echo "<hr>";
}

/*
11. Controla las siguientes acciones mediante una transacción, de forma que si se produce un
error, podamos devolver a la bbdd a su estado anterior al error. Habrá que mostrar el error.
*/
/*
a) Borra de la tabla Usuario aquel/los usuarios cuyo nombre sea Root1.
*/



try {
    // Iniciar la transacción
    $bbdd->beginTransaction();

    // Preparamos la consulta

$borrarNombre = 'Root1';
$consulBorrar = "DELETE FROM usuarios WHERE nombre = :nombre";
$prepaBorrar = $bbdd->prepare($consulBorrar);
$prepaBorrar->execute([':nombre' => $borrarNombre]);

/*
b) Añade a la tabla Usuario, un nuevo usuario con los siguientes datos: Usuario1. User3, 0.
*/

$nuevoUser = 'Usuario1';
$nuevapass = 'User3';
$nuevoRol = 0;

$consulAgregar = "INSERT INTO usuarios (nombre, clave, rol) VALUES (:nombre, :clave, :rol)";
    $prepaAgregar = $bbdd->prepare($consultaAgregar);
    $prepaAgregar->execute([
        ':nombre' => $nombreNuevo,
        ':clave' => $claveNuevo,
        ':rol' => $rolNuevo
    ]);

    // Si ambas operaciones tienen éxito, confirmamos la transacción

    $bbdd->commit();
    echo "Operaciones realizadas con éxito.";

} catch (PDOException $e) {

    // Si hay un error, rollBack()
    $bbdd->rollBack();
    echo "Error: " . $e->getMessage();

}
/*
12. Crea una nueva tabla llamada ‘Pedidos’, mediante una consulta SQL, que contenga los
siguientes campos:
a) IdPedido= autonumérico.
b) Detalle: string
c) fecha: date.
*/

try{

// Creamos la tabla pedidos

$consultaCrearTabla = "
CREATE TABLE Pedidos (
    IdPedido INT AUTO_INCREMENT PRIMARY KEY,
    Detalles VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL
)";

// Ejecutar la consulta

$bbdd->exec($consultaCrearTabla);
echo "Tabla 'Pedidos' creada con éxito.";

}catch (PDOException $e) {
    echo "Error al crear la tabla 'Pedidos': " . $e->getMessage();
}

// 13. Introduce algunos registros en dicha tabla (2 al menos)


   $bbdd->exec("INSERT INTO Pedidos (Detalle, fecha) VALUES ('Pedido de productos electrónicos', '2024-10-20')");
    
   $bbdd->exec("INSERT INTO Pedidos (Detalle, fecha) VALUES ('Pedido de suministros de oficina', '2024-10-21')");

   echo "Registros insertados con éxito.";

   // 14. Muéstralos

   // Consulta para mostrar la tabla pedidos

   $consulta = "SELECT * FROM Pedidos";
   $preparada = $bbdd->prepare($consulta);
   
   // Ejecutamos la consulta

   $preparada->execute();
   
   echo "<h3>Registros en la tabla Pedidos:</h3>";
   
   // Mostramos los registros

   while ($fila = $preparada->fetch(PDO::FETCH_ASSOC)) {
       echo "IdPedido: " . $fila['IdPedido'] . "<br>";
       echo "Detalle: " . $fila['Detalle'] . "<br>";
       echo "Fecha: " . $fila['fecha'] . "<br>";
       echo "<hr>"; 
   }

   // 15. Borra dicha tabla

   // Borramos la tabla pedidos
   // 'IF EXISTS' evita un error si la tabla no existe

   $consulta = "DROP TABLE IF EXISTS Pedidos"; 
   $bbdd->exec($consulta);
   
   echo "Tabla 'Pedidos' borrada con éxito.";