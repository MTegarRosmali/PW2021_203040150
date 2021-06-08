<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Rabu, 26 Mei 2021
Jum'at, 13.00
*/

require 'functions.php';

if (isset($_POST['registrasi']))
{
    if(registrasi($_POST) > 0)
    {
        echo "<script>
               alert('User Baru Berhasil ditambahkan. Silahkan Login!');
               document.Location.href = 'login.php';
              </script>";
    } else  
    {
        echo 'User gagal ditambahkan';
    }
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>REGISTRASI</title>
</head>
<body style="background-color: purple;">
<div class="container ">
    <div class="card mt-5 bg-dark text-light">
        <div class="card-body text-light">
            <h3>Form Registrasi</h3>

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
                            <input type="password" name="password1" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            Konfirmasi Password : 
                            <input type="password" name="password2" required>
                        </label>
                    </li>
                    <li>
                        <button type="submit" name="registrasi" class="btn btn-primary">Registrasi</button>
                    </li>
                    <a href="login.php">Kembali</a>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>