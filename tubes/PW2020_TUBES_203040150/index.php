<?php 
session_start();

if(!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit;
}


require 'functions.php';
$handphone = query("SELECT * FROM handphone");

// ketika tombol cari di klik
if (isset($_POST['cari']))
{
    $handphone = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Daftar Handphone</title>

</head>
<body>
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h1 class="display-3">Daftar Handphone</h1>
            <div class="add mb-3 btn btn-primary rounded-pill" style="width:120px" ;>
                <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data Handphone</a>
            </div>
            <br><br>
            

            <form action="" method="POST">
            <input type="text" name="keyword" size="40" placeholder="masukkan pencarian.." autocomplete="off" autofocus class="keyword">
            <button type="submit" name="cari" class="add mb-1 btn btn-primary rounded-pill" class="tombolCari">Cari</button>
            </form>
            <br>

            <table class="table table-bordered table-striped table-hover text-center bg-warning" >
                <tr>
                    <th>#</th>
                    <th>Detail</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                </tr>

                <?php if(empty($handphone)) : ?>
                <tr>
                    <td colspan="4"><p style="color: red; font-style: italic;">data handphone tidak ditemukan!</p></td>
                </tr>
                <?php endif; ?>

                <?php $i = 1; 
                foreach($handphone as $hp) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <a href="detail.php?id=<?= $hp['id']; ?>">Lihat Detail</a>
                        </td>
                        <td><img src="img/<?= $hp['Gambar'] ?>" width="100"></td>
                        <td><?= $hp['Nama']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="logout.php">Logout</a>
      </div>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>