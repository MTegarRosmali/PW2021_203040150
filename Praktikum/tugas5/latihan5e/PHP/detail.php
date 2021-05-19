<?php 
//mengecek apakah  ada id yang di kirimkan
$id = $_GET['id'];
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url


//melakukan query dengan parameter id yang di ambil dari url 
$hp = query("SELECT * FROM handphone WHERE id= $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <h1>GADGET</h1>
        <div class="Gambar">
            <img src="../assets/img/<?= $hp["Gambar"]; ?>"alt="">
        </div>
        <div class="keterangan">
            <p><?= $hp["Nama"]; ?></p>
            <p><?= $hp["Status"]; ?></p>
            <p><?= $hp["RAM"]; ?></p>
            <p><?= $hp["ROM"]; ?></p>
            <p><?= $hp["Harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>