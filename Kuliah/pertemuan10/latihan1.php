<?php 
// koneksi ke db & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040150');

// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array asosiactive
// $row = mysqli_fetch_array($result); // keduanya
$row = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// tampung ke variabel mahasiswa
$mahasiswa = $rows;

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
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

    <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td>
        <a href="">ubah</a> | <a href="">hapus</a>
        </td>
        <td><img src="gambar/<?= $mhs['gambar'] ?>" width="50"></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


</body>
</html>