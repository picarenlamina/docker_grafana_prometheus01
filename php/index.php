<?php

// Config DB
$host = 'mysql';
$db   = 'app_db';
$user = 'app_user';
$pass = 'app_pass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    echo "<h1>✅ Conexión OK</h1>";

    // Crear tabla si no existe
    $pdo->exec("CREATE TABLE IF NOT EXISTS visits (
        id INT AUTO_INCREMENT PRIMARY KEY,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // Insertar visita
    $pdo->exec("INSERT INTO visits () VALUES ()");

    // Contar visitas
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM visits");
    $row = $stmt->fetch();

    echo "<p>Visitas totales: " . $row['total'] . "</p>";

} catch (PDOException $e) {
    echo "❌ Error conexión: " . $e->getMessage();
}
