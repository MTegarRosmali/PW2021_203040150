<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jum'at,13.00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//Menghubungkan dengan file phplainnya
require 'functions.php';


//ketika tombol cari di klik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $handphone = query("SELECT * FROM handphone
      WHERE
    Nama LIKE '%$keyword%' OR
    Status LIKE '%$keyword%' OR
    RAM LIKE '%$keyword%' OR
    ROM LIKE '%$keyword%' OR
    Harga LIKE '%$keyword%' 
    ");
} else {
  $handphone = query("SELECT * FROM handphone");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5b</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <div class="container ">
    <div class="card mt-5 bg-dark text-light">
      <div class="card-body text-light">
        <h1 class="display-3">GADGET</h1>

        <div class="add mb-3 btn btn-primary rounded-pill" style="width:120px" ;>
          <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data</a>
        </div>

         <form action="" method="get" style="float: right;">
          <input type="text" name="keyword" size="29" class="rounded-pill" placeholder="Cari Handphone" autofocus>
          <button type="submit" name="cari" class="btn btn-success rounded-pill">Cari</button>
        </form>

        <div class="logout">
          <a href="logout.php">Logout</a>
        </div>

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
            <?php if (empty($hp)) : ?>
              <tr>
                <td colspan="9">
                  <h1>Data tidak ditemukan</h1>
                </td>
              </tr>
            <?php else : ?>
            <?php $i = 1 ?>
            <?php foreach ($handphone as $hp) : ?>
              <tr>
                <td> scope="hp"><?= $i ?></td>
                <td><img src="../assets/img/<?= $hp["Gambar"]; ?>"></td>
                <td><?= $hp["Nama"] ?></td>
                <td><?= $hp["Status"] ?></td>
                <td><?= $hp["RAM"] ?></td>
                <td><?= $hp["ROM"] ?></td>
                <td><?= $hp["Harga"] ?></td>
                <td>
                    <div class="update"><a href="ubah.php?id=<?= $hp["id"]; ?>"><button class="btn btn-primary rounded-pill">Ubah</button></a></div>
                    <div class="delete"><a href="hapus.php?id=<?= $hp["id"]; ?>" onclick="return confirm('yakin??');"><button class="btn btn-danger rounded-pill">Hapus</button></a></div>
                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>