<?php
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jumat,13.00
*/
?>

<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $hp['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $hp['id'];
    }
    if ($hp['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Halaman Login</title>
  </head>

  <body>
  	<div class="container">
  		<div class="card mt-5 bg-secondary">
    		<h1>Halaman Login</h1>

    		<?php if (isset($error)) : ?>
      		<p style="color: red; font-style: italic;">username / password salah</p>
    		<?php endif; ?>

    		<form action="" method="post">

      		<table>
        	<tr>
         	 	<td><label for="username">Username</label></td>
          		<td>:</td>
          		<td><input type="text" name="username"></td>
        	</tr>
        	<tr>
          		<td><label for="password">Password</label></td>
          		<td>:</td>
          		<td><input type="password" name="password"></td>
        	</tr>
      		</table>
      		<div class="remember">
        	<input type="checkbox" name="remember">
        	<label for="remember">Remember Me</label>
      		</div>
      		<button type="submit" name="submit">Login</button>

    		</form>
    	</div>
    </div>
  </body>

  </html>
</body>

</html>