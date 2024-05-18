<?php
session_start();

// cek session login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$alatrental = query("SELECT * FROM alatrental ORDER BY id");

//ketika tombol cari diklik
if (isset($_POST["cari"])) {
    $alatrental = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <a href="logout.php" class="logout">Logout</a>
    <h1>Halaman Daftar Alat Rental</h1>

    <a href="tambah.php" class="tambah">Tambah data alat rental</a>
    <br><br>

    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" size="40" autofocus 
        placeholder="Masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img src="img/loader.gif" class="loader">
    </form>

    <br>
    <div id="container">
    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Kategori</th>
            <th>Harga</th>
        </tr>
        
    <?php $i = 1;?>
    <?php foreach ($alatrental as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td class="aksi">
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
    </div>
</body>
</html>