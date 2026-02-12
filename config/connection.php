<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sdn_2_kancilan";


$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>