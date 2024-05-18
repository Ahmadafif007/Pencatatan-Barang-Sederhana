<?php

session_start();

// cek session login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        
        //cek data apakah berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Data Alat Rental</title>
</head>
<body>
    <h1>Tambah Data Alat Rental</h1>

    <form action="" class="form-tambah" method="post" enctype="multipart/form-data">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" required>

    <label for="jenis">Jenis :</label>
    <input type="text" id="jenis" name="jenis" required>

    <label for="kategori">Kategori :</label>
    <input type="text" id="kategori" name="kategori" required>

    <label for="harga">Harga :</label>
    <input type="number" id="harga" name="harga" required>

    <label for="gambar">Gambar :</label>
    <input type="file" id="gambar" name="gambar" required>
    <br>
    <input type="submit" value="Tambah Data!">

    <a href="index.php">Kembali</a>
    </form>

</body>
</html>