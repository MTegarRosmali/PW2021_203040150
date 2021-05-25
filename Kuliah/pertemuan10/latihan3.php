<?php 
require 'functions.php';
$handphone = query("SELECT * FROM handphone");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>

</head>
<body>
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h1>Daftar Handphone</h1>
            <div class="add mb-3 btn btn-primary rounded-pill" style="width:120px" ;>
                <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data Handphone</a>
            </div>
            <br><br>
            <table class="table table-bordered table-striped table-hover text-center bg-warning" >
                <tr>
                    <th>#</th>
                    <th>Detail</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                </tr>
                <?php $i = 1; foreach($handphone as $hp) : ?>
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
      </div>
    </div>
</div>
</body>
</html>