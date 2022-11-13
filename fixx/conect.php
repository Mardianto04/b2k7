<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "ipm";

$conn = mysqli_connect($server, $user, $pass, $db_name);

if (!$conn) {
    die("Gagal terhubung ke database : " . mysqli_connect_error());
}