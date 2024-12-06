<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM tablemu");
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body class="content" onload="fungsi()">
    <nav>
        <a class="Company">Wonderhoy</a>
        <a href="" class="Nav">Home About Us Contact Us</a>
    </nav>
    <div>
    <table>
    <?php foreach ($users as $user): ?>
        <tr>
        <td><?= htmlspecialchars($user['cardNumber']) ?></td>
        <td><?= htmlspecialchars($user['expireNumber']) ?></td>
        <td><?= htmlspecialchars($user['cvvNumber']) ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    </div>
    <script>fungsi()</script>
    <audio autoplay id="audio" src="wonderhoy-made-with-Voicemod.mp3"></audio>
</body>
</html>