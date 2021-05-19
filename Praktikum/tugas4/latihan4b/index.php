<?php
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jumat,13.00
*/
?>

<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$handphone = query("SELECT * FROM handphone");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">RAM</th>
      <th scope="col">ROM</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach ( $hp as $row ) : ?>
            <tr>
              <th scope=><?= $i ?></th>
              <td><img src="../assets/img/<?= $row["Gambar"]; ?>"></td>
              <td><?= $row["Nama"] ?></td>
              <td><?= $row["Status"] ?></td>
              <td><?= $row["RAM"] ?></td>
              <td><?= $row["ROM"] ?></td>
              <td><?= $row["Harga"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>