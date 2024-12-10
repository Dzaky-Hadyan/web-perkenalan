<?php
$dsn = "mysql:host=localhost;dbname=databasemu;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO(dsn: $dsn, username: $username, password: $password, options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>