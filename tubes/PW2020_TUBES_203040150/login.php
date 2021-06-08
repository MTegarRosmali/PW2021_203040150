<?php
/*
M.Tegar Nurul Fuad Rosmali
203040150
Rabu, 26 Mei 2021
Jum'at, 13.00
*/

session_start();

if(isset($_SESSION['login']))
{
    header("Location: index.php");
    exit;
}
require 'functions.php';
 
// ketika tombol login ditekan
if (isset($_POST['login'])) 
{
    $login = login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color: yellow;">
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h3>Form Login</h3>
            <?php if(isset($login['error'])) : ?>
                <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
            <?php endif; ?>

            <form action="" method="POST">
                <ul>
                    <li>
                        <label>
                            Username : 
                            <input type="text" name="username" autofocus autocomplete="off" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            Password : 
                            <input type="password" name="password" required>
                        </label>
                    </li>
                    <li>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </li>
                    <br>
                    <h7>Jika belum mempunyai akun Silahkan Registrasi></h7>
                    <a href="registrasi.php">Registrasi</a>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>

