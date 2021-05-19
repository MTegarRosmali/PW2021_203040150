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
    <title>Latihan5a</title>
</head>
<body>
  <div class="container">
    <?php foreach ($handphone as $hp) : ?>
      <p class="Nama">
        <a href="../php/detail.php?id=<?= $hp['id'] ?>">
          <?= $hp["Nama"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>
</html>