<?php  
/*
M.Tegar Nurul Fuad Rosmali
203040150
Rabu, 26 Mei 2021
Jum'at, 13.00
*/

session_start();

if(!isset($_SESSION['login'])) 
{
    header("Location: login.php");
    exit;
}
require 'functions.php';
 
// jika tidak ada id di URL
if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}

// mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0 ) 
{
    echo "<script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
              </script>";
} 
else 
{
    echo "data gagal dihapus";
}

?>