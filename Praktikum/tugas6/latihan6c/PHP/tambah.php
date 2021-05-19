<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jum'at,13.00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data GADGET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-5 bg-secondary">
    <div class="form">
        <h1>Form Tambah Data GADGET</h1>
        <div class="card-body bg-warning">
        <form method="post" action="">
            <ul>
                <li>
                    <label for="Gambar">Gambar : </label> <br>
                    <input type="file" name="Gambar" id="Gambar" required><br>
                </li>
                <li>
                    <label for="Nama">Nama : </label>
                    <input type="text" name="Nama" id="Nama" required><br>
                </li>
                <li>
                    <label for="Status">Status : </label>
                    <input type="text" name="Status" id="Status" required><br>
                </li>
                <li>
                    <label for="RAM">RAM : </label>
                    <input type="text" name="RAM" id="RAM" required><br>
                </li>
                <li>
                    <label for="ROM">ROM : </label>
                    <input type="text" name="ROM" id="ROM" required><br>
                </li>
                <li>
                    <label for="Harga">Harga : </label>
                    <input type="text" name="Harga" id="Harga" required><br>
                </li>
                <li>
                    <button type="submit" name="tambah">Tambah Data</button>
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color:black;">Kembali</a>
                    </button>
                </li>
            </ul>
        </form>
        </div>
    </div>
    </div>

</body>

</html>