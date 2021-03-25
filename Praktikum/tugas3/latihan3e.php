<?php
/*
M.Tegar Nurul Fuad Rosmali
203040150
JAM PRAKTIKUM 13:00
*/
?>

<?php 
$handphone = [
    [
        "Nama" => "OPPO A53",
        "Status" => "Baru",
        "RAM" => "6GB",
        "ROM" => "128GB",
        "Harga" => "Rp.2.129.000",
        "gambar" => "1.PNG"
    ],
    [
        "Nama" => "OPPO A15",
        "Status" => "Baru",
        "RAM" => "3GB",
        "ROM" => "32GB",
        "Harga" => "Rp.1.700.000",
        "gambar" => "2.PNG"
    ],
    [
        "Nama" => "OPPO A57",
        "Status" => "Second",
        "RAM" => "3GB",
        "ROM" => "32GB",
        "Harga" => "Rp.700.000",
        "gambar" => "3.PNG"
    ],
    [
        "Nama" => "OPPO RENO 4",
        "Status" => "Baru",
        "RAM" => "8",
        "ROM" => "128",
        "Harga" => "Rp.3.625.000",
        "gambar" => "4.PNG"
    ],
    [
        "Nama" => "OPPO RENO 5",
        "Status" => "Baru",
        "RAM" => "12GB",
        "ROM" => "256GB",
        "Harga" => "Rp.3.800.000",
        "gambar" => "5.PNG"
    ],
    [
        "Nama" => "OPPO A92s",
        "Status" => "Baru",
        "RAM" => "8GB",
        "ROM" => "256GB",
        "Harga" => "Rp.3.200.000",
        "gambar" => "6.PNG"
    ],
    [
        "Nama" => "OPPO A3s",
        "Status" => "Baru",
        "RAM" => "3GB",
        "ROM" => "32GB",
        "Harga" => "Rp.1.350.000",
        "gambar" => "7.PNG"
    ],
    [
        "Nama" => "OPPO A11k",
        "Status" => "Second",
        "RAM" => "2GB",
        "ROM" => "32GB",
        "Harga" => "Rp.1.200.000",
        "gambar" => "8.PNG"
    ],
    [
        "Nama" => "OPPO A92",
        "Status" => "Baru",
        "RAM" => "8GB",
        "ROM" => "128GB",
        "Harga" => "Rp.3.500.000",
        "gambar" => "9.PNG"
    ],
    [
        "Nama" => "OPPO A93",
        "Status" => "Second",
        "RAM" => "8GB",
        "ROM" => "128GB",
        "Harga" => "Rp.2.500.000",
        "gambar" => "10.PNG"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
    <?php foreach($handphone as $handphone) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="../gambar/<?= $handphone["gambar"]; ?>"></td>
      <td><?= $handphone["Nama"] ?></td>
      <td><?= $handphone["Status"] ?></td>
      <td><?= $handphone["RAM"] ?></td>
      <td><?= $handphone["ROM"] ?></td>
      <td><?= $handphone["Harga"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>