<?php  
session_start();

if(!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit;
}
require 'functions.php';

// jika tidak ada id di URL
if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}

// ambil id dari URl
$id = $_GET['id'];

// cari handphone berdasarkan id
$hp = query("SELECT *FROM handphone WHERE id= $id");
 
// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
    if( ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
              </script>";
    } else{
        echo "data gagal diubah!";
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
    <title>Ubah Data Handphone</title>
</head>
<body style="background-color: green;">
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h3>Ubah Data Handphone</h3>
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $hp['id']; ?>">
                <ul>
                    <li>
                        <input type="hidden" name="gambar_lama" required value="<?= $hp['Gambar ']; ?>">
                        <label>
                            Gambar :
                            <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
                        </label>
                        <img src="img/<?= $hp['Gambar']; ?>" width="120" style="display: block;" class="img-Preview">
                    </li>
                    <li>
                        <label>
                            Nama :
                            <input type="text" name="Nama" required value="<?= $hp['Nama']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            Status :
                            <input type="text" name="Status" required value="<?= $hp['Status']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            RAM :
                            <input type="text" name="RAM" required value="<?= $hp['RAM']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            ROM :
                            <input type="text" name="ROM" required value="<?= $hp['ROM']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            Harga :
                            <input type="text" name="Harga" required value="<?= $hp['Harga']; ?>">
                        </label>
                    </li>
                    <li>
                    <button type="submit" name="ubah">ubah Data</button>
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