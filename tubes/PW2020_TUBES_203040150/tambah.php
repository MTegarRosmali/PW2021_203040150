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

// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if( tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "data gagal ditembahkan!";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Data Handphone</title>
</head>
<body style="background-color: orange;">
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h3>Tambah Data Handphone</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label>
                            Gambar :
                            <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
                        </label>
                        <img src="img/nofoto.png" width="120" style="display: block;" class="img-Preview">
                    </li>
                    <li>
                        <label>
                            Nama :
                            <input type="text" name="Nama" autofocus required>
                        </label>
                    </li>
                    <li>
                        <label> 
                            Status :
                            <input type="text" name="Status" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            RAM :
                            <input type="text" name="RAM" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            ROM :
                            <input type="text" name="ROM" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            Harga :
                            <input type="text" name="Harga" required>
                        </label>
                    </li>
                    <li>
                    <button type="submit" name="tambah">Tambah Data</button>
                    </li>
                    <a href="index.php">Kembali</a>
                </ul>
            </form>
        </div>
    </div>
</div>
 <script src="js/script.js"></script>
</body>
</html>