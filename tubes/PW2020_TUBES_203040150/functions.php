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

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['ukuran'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // tidak ada gambar yang di pilih
    if($error == 4)
    {
        // echo "<script>
        //      alert('pilih gambar terlebih dahulu');
        //      </script>";
        return 'a.png';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg','jpeg','png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar))
    {
        "<script>
         alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
    }

    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png')
    {
        echo "<script>
               alert('yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if($ukuran_file > 5000000) 
    {
       echo "<script>
             alert('ukuran gambar terlalu besar!');
             </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;

}

function tambah($data) 
{
    $conn = Koneksi();

    // $Gambar = htmlspecialchars($data['Gambar']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $RAM = htmlspecialchars($data['RAM']);
    $ROM = htmlspecialchars($data['ROM']);
    $Harga = htmlspecialchars($data['Harga']);

    // upload gambar
    $Gambar = upload();
    if (!$Gambar)
    {
        return false;
    }


     

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

    // meghapus gambar di folder img
    $hp = query("SELECT * FROM handphone WHERE id = $id");
    if ($hp['Gambar'] != 'a.png')
    {
        unlink('img/' . $hp['Gambar']);
    }

    mysqli_query($conn, "DELETE FROM handphone WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) 
{
    $conn = Koneksi();

    $id = ($data['id']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $RAM = htmlspecialchars($data['RAM']);
    $ROM = htmlspecialchars($data['ROM']);
    $Harga = htmlspecialchars($data['Harga']);
    
    $Gambar = upload();
    if (!$Gambar) 
    {
        return false;
    }

    if ($Gambar == 'a.png')
    {
        $Gambar = $gambar_lama;
    }


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

    // jika password < 5 digit
    if (strlen($password1) < 5)
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
                user
               VALUES
              ('','$username','$password_baru')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>