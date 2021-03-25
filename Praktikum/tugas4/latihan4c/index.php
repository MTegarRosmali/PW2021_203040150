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
    <title>Latihan4c</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3" >
  <h1>GADGET</h1>
  <div class="card" style="width: 45rem">
    <div class="card-body">
      <div class="hp">
        <div class="col md-6">
          <?php foreach( $handphone as $hp ) : ?>
            <p class="Nama">
              <a href="php/detail.php?id=<?= $hp['id'] ?>">
                <img src="../assets/img/<?= $hp["Gambar"]; ?>">
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