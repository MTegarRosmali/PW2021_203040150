<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
https://github.com/MTegarRosmali/pw2021_203040150
Pertemuan 6 - 3 Maret 2021
Materi Minggu ini mempelajari tentang Array Associative
*/
?>

<?php
// $mahasiswa = [
//     ["M.Tegar Nurul Fuad Rosmali", "203040150", "TIF", "02tegarrosmali@gmail.com"],
//     ["Ucup", "203040199", "TI", "ucupuwow@gmail.com"],
//     ["Joni", "203040200", "TM", "joni@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "M.Tegar Nurul Fuad Rosmali", 
        "nrp" => "203040150",
        "email" => "02tegarrosmali@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "tegar.jpg"
    ],
    [
        "nama" => "Ucup", 
        "nrp" => "203040199",
        "email" => "ucupuwow@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "tegar.jpg"
    ]
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
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>