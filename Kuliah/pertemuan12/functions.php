<?php  

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'tubes_203040150');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if( mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
while ($row = mysqli_fetch_assoc($result)) 
    {
    $rows[] = $row;
    }

    return $rows;
}

function tambah($data) 
{
    $conn = Koneksi();

    $Gambar = htmlspecialchars($data['Gambar']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $RAM = htmlspecialchars($data['RAM']);
    $ROM = htmlspecialchars($data['ROM']);
    $Harga = htmlspecialchars($data['Harga']);
    

    $query = "INSERT INTO 
               handphone
              VALUES
              ('', '$Gambar', '$Nama','$Status','$RAM','$ROM','$Harga');
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function hapus ($id) 
{
    $conn = Koneksi();
    mysqli_query($conn, "DELETE FROM handphone WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) 
{
    $conn = Koneksi();

    $id = ($data['id']);
    $Gambar = htmlspecialchars($data['Gambar']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $RAM = htmlspecialchars($data['RAM']);
    $ROM = htmlspecialchars($data['ROM']);
    $Harga = htmlspecialchars($data['Harga']);
    

    $query = "UPDATE handphone SET
               Gambar = '$Gambar',
               Nama = '$Nama',
               Status = '$Status',
               RAM = '$RAM',
               ROM = '$ROM',
               Harga = '$Harga'
               WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function cari($keyword) 
{
    $conn = koneksi();

    $query = "SELECT * FROM handphone
                WHERE 
                Nama LIKE '%$keyword%' OR
                Status LIKE '%$keyword%' OR
                RAM LIKE '%$keyword%' OR
                ROM LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
}

function login($data) 
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if ($user = query("SELECT * FROM user WHERE username = '$username' && password = '$password'")) 
    {
        // cek password
        if (password_verify($password, $user['password'])){
        // set session
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;
        }

    } 
        return [
            'error' => true,
            'pesan' => 'Username / Password Salah'
        ];
}


function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password2) || empty($password1)) 
    {
        echo "<script>
               alert('username / password tidak boleh kosong!');
               document.Location.href = 'registrasi.php';
              </script>";
        return false;
    }
   

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'"))
    {
        echo "<script>
               alert('username sudah ada');
               document.Location.href = 'registrasi.php';
              </script>";
        return false;
    }

    // jika username tidak sesuai
    if ($password1 !== $password2)
    {
        echo "<script>
               alert('konfirmasi password tidak sesuai');
               document.Location.href = 'registrasi.php';
              </script>";
        return false;
    }

    // jika password < 8 digit
    if (strlen($password1) < 8)
    {
        echo "<script>
               alert('password minimal 8 digit');
               document.Location.href = 'registrasi.php';
              </script>";
        return false;
    }

    // jika username / password tidak sesuai
    // enkripsi
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert le tabel user
    $query = "INSERT INTO
               VALUES
              ('','$username','$password_baru')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>