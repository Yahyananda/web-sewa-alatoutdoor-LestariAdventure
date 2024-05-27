<?php

$server = "localhost";
$user = "root";
$pass = "";
$nama_database = "lestari adventure";

$db = mysqli_connect($server, $user, $pass, $nama_database);

if (!$db) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
