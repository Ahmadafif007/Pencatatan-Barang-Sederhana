<?php
require 'functions.php';

if( isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('User baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        label {
            display: block;
        }
    </style>
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form class="form-registrasi" action="" method="post">

        <label for="username"> username :</label>
        <input type="text" name="username" id="username">

        <label for="password"> password :</label>
        <input type="password" name="password" id="password">

        <label for="password2">konfirmasis password :</label>
        <input type="password" name="password2" id="password2">

        <br>
        <button type="submit" name="register">Register!</button>
        <a href="login.php">Login</a>   
    </form>

</body>
</html>