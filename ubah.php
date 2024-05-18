<?php

session_start();

// cek session login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data alat berdasarkan id
$alat = query("SELECT * FROM alatrental WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        
        //cek data apakah berhasil diubah atau tidak
        if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
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
    <title>Ubah Data Alat Rental</title>
</head>
<body>
    <h1>Ubah Data Alat Rental</h1>

    <form class="form-ubah" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $alat["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $alat["gambar"] ?>">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $alat["nama"] ?>">
    
                <label for="jenis">Jenis Alat : </label>
                <input type="text" name="jenis" id="jenis" value="<?= $alat["jenis"] ?>">
    
                <label for="kategori">Kategori : </label>
                <input type="text" name="kategori" id="kategori" required value="<?= $alat["kategori"] ?>">
    
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required value="<?= $alat["harga"] ?>">
    
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $alat['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar" required>
                
                <button type="submit" name="submit">Ubah Data!</button>

                <a href="index.php">Kembali</a>
    </form>

</body>
</html>