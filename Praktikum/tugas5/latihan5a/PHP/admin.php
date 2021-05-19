<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jum'at,13.00
*/
?>

<?php
//Menghubungkan dengan file phplainnya
require 'functions.php';
//Melakukan query dari database
$handphone = query("SELECT * FROM handphone");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5a</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <div class="container ">
    <div class="card mt-5 bg-dark text-light">
      <div class="card-body text-light">
        <h1 class="display-3">GADGET</h1>
        <table id="table" class="table table-bordered table-striped table-hover text-center bg-warning">
          <thead>
            <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Status</th>
              <th>RAM</th>
              <th>ROM</th>
              <th>Harga</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach ($handphone as $hp) : ?>
              <tr>
                <th scope="hp"><?= $i ?></th>
                <td><img src="../assets/img/<?= $hp["gambar"]; ?>"></td>
                <td><?= $hp["Nama"] ?></td>
                <td><?= $hp["Status"] ?></td>
                <td><?= $hp["RAM"] ?></td>
                <td><?= $hp["ROM"] ?></td>
                <td><?= $hp["Harga"] ?></td>
                <td>
                  <a><button type="button" class="btn btn-primary">Ubah</button></a>
                  <a><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>