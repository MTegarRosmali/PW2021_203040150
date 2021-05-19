<?php 
/*
M.Tegar Nurul Fuad Rosmali
203040150
Jum'at,13.00
*/
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>