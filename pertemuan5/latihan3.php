<?php
/* 
    M.Tegar Nurul Fuad Rosmali
    203040150
    https://github.com/MTegarRosmali/pw2021_203040150
    Pertemuan 5 - 3 Maret 2021
    Materi Minggu ini mempelajari tentang Array
*/
?>

<?php
$mahasiswa = [
    ["M.Tegar Nurul Fuad Rosmali", "203040150", "TIF", "02tegarrosmali@gmail.com"],
    ["Ucup", "203040199", "TI", "ucupuwow@gmail.com"],
    ["Joni", "203040200", "TM", "Joni@gmail.com"]
];
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
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>