<?php  
/*
M.Tegar Nurul Fuad Rosmali
203040150
Rabu, 26 Mei 2021
Jum'at, 13.00
*/

session_start();

if(!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit;
}
require 'functions.php';
 
// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$hp = query("SELECT * FROM handphone WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Detail Handphone</title>
</head>
<body style="background-color: blue;">
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h3 class="display-3">Detail Handphone</h3>
            <ul>
                <li><img src="img/<?= $hp['Gambar']; ?>" width="150"></li>
                <li>Nama : <?= $hp['Nama']; ?></li>
                <li>Status : <?= $hp['Status']; ?></li>
                <li>RAM : <?= $hp['RAM']; ?></li>
                <li>ROM : <?= $hp['ROM']; ?></li>
                <li>Harga : <?= $hp['Harga']; ?></li>
                <a href="ubah.php?id=<?= $hp['id']; ?>" class="add mb-3 btn btn-primary rounded-pill" style="width: 100px;">Ubah</a> | <a href="hapus.php?id=<?= $hp['id']; ?>" onclick="return confirm ('apakah anda yakin!');" class="add mb-3 btn btn-primary rounded-pill" style="width: 100px;">Hapus</a>
                <br>
                <a href="index.php" class="add mb-3 btn btn-primary rounded-pill" style="width: 100px;">Kembali</a>
            </ul>
        </div>
    </div>
</div>
</body>
</html>