<?php
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
<body>
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
                    <button type="submit" name="login">Login</button>
            </li>
            <br>
            <li>
                <div class="add mb-1 btn btn-primary rounded-pill" style="width:150px">
                    <a href="registrasi.php" style="text-decoration:none;color:#000;">Tambah User Baru</a>
                </div>
            </li>
        </ul>
    </form>
</body>
</html>