<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jum'at,13.00
*/
?>

<?php
session_start();

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data buku berdasarkan id
$hp = query("SELECT * FROM handphone WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "data gagal ditambahkan!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data GADGET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-5 bg-secondary">
    <div class="form">
        <h1>Form Ubah Data GADGET</h1>
        <div class="card-body bg-warning">
        <form method="post" action="">
            <ul>
                <input type="hidden" name="id" id="id" value="<?= $hp['id']; ?>">
                <li>
                    <label for="Gambar">Gambar : </label> <br>
                    <input type="file" name="Gambar" id="gambar" required value="<?= $hp["Gambar"]; ?>"><br>
                </li>
                <li>
                    <label for="Nama">Nama : </label>
                    <input type="text" name="Nama" id="Nama" required value="<?= $hp["Nama"]; ?>"><br>
                </li>
                <li>
                    <label for="Status">Status : </label>
                    <input type="text" name="Status" id="Status" required value="<?= $hp["Status"]; ?>"><br>
                </li>
                <li>
                    <label for="RAM">RAM : </label>
                    <input type="text" name="RAM" id="RAM" required value="<?= $hp["RAM"]; ?>"><br>
                </li>
                <li>
                    <label for="ROM">ROM : </label>
                    <input type="text" name="ROM" id="ROM" required value="<?= $hp["ROM"]; ?>"><br>
                <li>
                    <label for="RAM">Harga : </label>
                    <input type="text" name="Harga" id="Harga" required value="<?= $hp["Harga"]; ?>"><br>
                </li>
                <li>
                    <button type="submit" name="ubah">Ubah Data</button>
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color:black;">Kembali</a>
                    </button>
                </li>
        </form>
        </div>
    </div>
    </div>

</body>

</html>