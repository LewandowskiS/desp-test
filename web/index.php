<?php
$servername = "daw-db-server"; // Esto debe coincidir con el nombre del servicio en docker-compose
$username = "root";
$password = "pass"; // En el PDF usan 'pass' como ejemplo[cite: 506], usaremos esa.
$dbname = "inventario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}
echo "<h1>¡Conexión Exitosa a la Intranet DAW!</h1>";
echo "<p>Si ves esto, PHP y MySQL se están comunicando correctamente.</p>";

$conn->close();
?>