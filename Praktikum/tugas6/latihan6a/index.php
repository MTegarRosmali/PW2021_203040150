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
$handphone = query("SELECT * FROM handphone")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan6a</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 bg-secondary">
  <h1>GADGET</h1>
  <a href="php/login.php">
      <button type="" class="btn btn-primary rounded-pill">Masuk ke Halaman Admin</button>
    </a>
  <div class="card" style="width: 45rem">
    <div class="card-body bg-warning">
      <div class="hp">
        <div class="col md-5">
          <?php foreach( $handphone as $hp ) : ?>
            <p class="Nama">
              <a href="php/detail.php?id=<?= $hp['id'] ?>">
                <img src="assets/img/<?= $hp["Gambar"]; ?>">
              </a>
            </p>  
          <?php endforeach;  ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>