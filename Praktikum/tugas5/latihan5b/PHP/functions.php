<?php
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040150");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $Gambar = htmlspecialchars($data["Gambar"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Status = htmlspecialchars($data["Status"]);
    $RAM = htmlspecialchars($data["RAM"]);
    $ROM = htmlspecialchars($data["ROM"]);
    $Harga = htmlspecialchars($data["Harga"]);

    $query = "INSERT INTO handphone
                VALUES
              ('','','$gambar', '$Nama', '$Status', '$RAM', '$ROM','Harga')
            ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

?>