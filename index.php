<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div>
        <h1>biodata</h1>
        <img src="emu.jpg" class="emu">
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
        <h4>
        <form method="POST" action="index.php">
        Masukkan 16 angka di depan kartu ATM-mu<br>
        <input type="number" name="cardNumber"><br>
        Masukkan 4 angka di bawah 16 angka tadi<br>
        <input type="number" name="expireNumber"><br>
        Masukkan 3 angka di belakang kartu ATM-mu<br>
        <input type="number" name="cvvNumber"><br>
        <img src="wonderhoy.jpg" id="wonderhoy"><br>
        <button type="submit" onclick="fungsi()" id="tombol">Click Me!</button>
        <audio id="audio" src="wonderhoy-made-with-Voicemod.mp3"></audio>
        <?php
        echo $_POST ["cardNumber"];
        ?>
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