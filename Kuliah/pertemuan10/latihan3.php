<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">

    <h3>Daftar Mahasiswa</h3>

    <tr>
		<th>#</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
	</tr>

    <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
        </td>
        <td><img src="gambar/<?= $mhs['gambar'] ?>" width="50"></td>
        <td><?= $mhs['nama']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


</body>
</html>