<?php

include '../database.php';
if (isset($_POST['simpan'])) {
    $email = $_POST['email'];
    $address = $_POST['address'];
    $jn_kelamin = $_POST['jn_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_telp = $_POST['no_telp'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user (Email,alamat,jn_kelamin,tgl_lahir,no_telp,username,password) VALUE ('$email','$address','$jn_kelamin','$tgl_lahir','$no_telp','$username','$password')";
    $query = mysqli_query($db, $sql);
    if ($query) {

        header('location: user_login.php?status=sukses');
    } else {

        header('location: user_login.php?status=gagal');
    }
} else {
    die("akses dilarang ...");
}
