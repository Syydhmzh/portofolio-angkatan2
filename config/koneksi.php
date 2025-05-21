<?php
$hostname = "localhost";
$hostusername = "root";
$hostpassword = "";
$database = "db_porto_2";

$config = mysqli_connect($hostname, $hostusername, $hostpassword, $database);
if (!$config) {
    echo "Koneksi Gagal";
}

?>