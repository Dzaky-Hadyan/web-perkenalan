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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan</title>
    <link rel="stylesheet" href="/style.css">
    <script src="/script.js"></script>
</head>
<body>
    <nav>
        <a class="Company">Wonderhoy</a>
        <a href="" class="Nav">Home About Us Contact Us</a>
    </nav>
    <div>
        <h1>biodata</h1>
        <img src="emu.png" class="emu">
        <h3>
            Nama    : Dzaky Hadyan Eliyanta<br>
            Nama Panggilan : Dzaky<br>
            NIM     : 244107020117<br>
            Kelas   : TI-1H<br>
            Jurusan : Teknologi Informasi<br>
            Prodi   : Teknik Informatika<br>
            Alamat  : Jl. Anila IV 9F/22<br>
            Hobi    : <ul>
                        <li>Membaca</li>
                        <li>Bermain Musik</li>
                    </ul>
        </h3>
        <br>
        <h4>
        <form method="POST" action="">
        Masukkan 16 angka di depan kartu ATM-mu<br>
        <input type="number" id="cardNumber" name="cardNumber" required maxlength="16" pattern="\d{16}"><br>
        Masukkan 4 angka di bawah 16 angka tadi<br>
        <input type="number" id="expireNumber" name="expireNumber" required maxlength="4" pattern="\d{4}"><br>
        Masukkan 3 angka di belakang kartu ATM-mu<br>
        <input type="number" id="cvvNumber" name="cvvNumber" required maxlength="3" pattern="\d{3}"><br>
        <img src="wonderhoy.png" id="wonderhoy"><br>
        <input type="button" onclick="fungsi()" id="tombol" value="Click Me!">
        <audio id="audio" src="wonderhoy-made-with-Voicemod.mp3"></audio>
        </form>
        </h4>
    </div>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In officia repellat rerum asperiores dolores, magnam libero officiis assumenda molestias id laboriosam incidunt iste provident consectetur quibusdam aliquid nesciunt alias iure.</p>
    <p>Voluptatem adipisci animi inventore eligendi quae, eos cupiditate commodi minima nulla quia. Illo, libero id fugit quod sapiente eveniet sed, possimus provident inventore quos totam, est dolor ratione deserunt quibusdam!</p>
    <p>Adipisci nemo eius ea ipsam quia ad mollitia voluptates vitae! Dolorem, aliquam. Quo, illo mollitia eaque alias rem voluptate est ex exercitationem nostrum, quas expedita dolorem omnis soluta corporis asperiores.</p>
    <p>Eius repellendus commodi blanditiis vero, illum beatae magni facere perferendis eaque eum adipisci earum ad suscipit magnam reprehenderit excepturi quod expedita id voluptatum deserunt fugiat. Placeat sunt quaerat doloremque facere!</p>
    <p>Totam reiciendis ut cumque aspernatur rem, a corrupti error ea aperiam doloremque facere corporis tempora itaque fuga magnam, iure, rerum quos ab? Perferendis veritatis voluptates placeat reprehenderit ipsam, obcaecati voluptas.</p>
</body>
</html>