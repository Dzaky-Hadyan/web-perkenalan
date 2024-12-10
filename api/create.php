<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $expireNumber = $_POST['expireNumber'];
    $cvvNumber = $_POST['cvvNumber'];

    // echo $_POST['cardNumber'];

    $stmt = $pdo->prepare("INSERT INTO tablemu (cardNumber, expireNumber, cvvNumber) VALUES (?, ?, ?)");
    $stmt->execute([$cardNumber, $expireNumber, $cvvNumber]);

    header("Location: read.php");
    exit;
}