<?php 
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$handphone = query("SELECT * FROM handphone WHERE id= $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>GADGET</h1>
        <div class="card border border-primary" style="max-width: 540px;">
            <div class="hp no-gutters">
                <div class="col-md-4 mt-3 pl-2">
                    <img src="../assets/img/<?= $handphone["Gambar"]; ?>" class="card-img border border-dark">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title m-1"><?= $handphone["Nama"] ?></h5>
                            <ul>
                                <li class="card-text"><?= $handphone["Status"] ?></li>
                            <li class="card-text"><?= $handphone["RAM"] ?></li>
                                <li class="card-text"><?= $handphone["ROM"] ?></li>
                                <li class="card-text"><?= $handphone["Harga"] ?></li>
                            </ul>
                        <button class="tombol-kembali btn btn-outline-primary"><a href="../index.php">kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>