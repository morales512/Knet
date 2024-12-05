<?php
// Configurar los datos de la base de datos
$host = 'localhost';  // Cambia esto si estás utilizando otro servidor
$dbname = 'marketzone'; // Nombre de la base de datos
$username = 'root';    // Tu nombre de usuario de la base de datos
$password = '202131603_Jp';        // Tu contraseña de la base de datos

try {
    // Conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar el modo de error de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si hay un error, mostrarlo
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
