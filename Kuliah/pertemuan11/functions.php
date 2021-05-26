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
while ($row = mysqli_fetch_assoc($result)) {
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
}

?>