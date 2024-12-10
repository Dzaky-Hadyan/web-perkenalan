<?php
$dsn = "mysql:host=sql12.freesqldatabase.com;dbname=sql12751028;charset=utf8mb4";
$username = "sql12751028";
$password = "xzUPiR9gjJ";

try {
    $pdo = new PDO(dsn: $dsn, username: $username, password: $password, options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>