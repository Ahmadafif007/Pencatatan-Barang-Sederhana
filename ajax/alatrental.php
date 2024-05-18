<?php
// simulasi loading 
usleep(500000);

require '../functions.php';
$keyword = $_GET["keyword"];
$keyword = strtolower($keyword);

$query = "SELECT * FROM alatrental
            WHERE
            nama LIKE '%$keyword%' OR
            jenis LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
$alatrental = query($query);
?>
<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
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
        <td>
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