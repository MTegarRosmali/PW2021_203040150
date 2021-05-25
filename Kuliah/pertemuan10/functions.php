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

    $row = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = Koneksi();

    $Nama = htmlspecialchars($data['Nama']);
    $Status = htmlspecialchars($data['Status']);
    $RAM = htmlspecialchars($data['RAM']);
    $ROM = htmlspecialchars($data['ROM']);
    $Harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO 
              handphone
              VALUES
              (null, '$Nama','$Status','$RAM','$ROM','$Harga');
              ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);

}

?>