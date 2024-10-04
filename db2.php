<?php
$host = '192.168.1.2';
$port = '3050';
$dbname = 'F:\\FirebirdDB\\ABASTECEDOR.FDB';
$username = 'SYSDBA';
$password = 'masterkey';

try {
    // Crear la cadena de conexión
    $dsn = "firebird:dbname={$host}/{$port}:{$dbname}";
    // Establecer la conexión
    $conexion2 = new PDO($dsn, $username, $password);
    // Establecer el modo de error de PDO en excepción
    $conexion2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Aquí puedes usar "$conexion2" para interactuar con tu base de datos
} catch(PDOException $e) {
    echo "Error en la conexión:" . $e->getMessage();
}
?>