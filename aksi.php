<?php
//berfungsi mengaktifkan session
session_start();

//berfungsi menghubungkan koneksi ke database
include 'koneksi.php' ;

//befungsi menangkap data yang dikirim
$username = $_POST['username'];
$password = $_POST['password'];

//menyelesaikan data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_user where username='$username'") or die (mysqli_error($koneksi));

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$cekPass = mysqli_fetch_array($data);

if ($cek > 0) {
    if ($password <> $cekPass['Password']) {
        header("location:index.php?pesan=pass");
    }
    else {
        $_SESSION['nik'] = $nik;
        $_SESSION['nama'] = $cekPass['Password'];
        header("location:home.php");
    }
    }  else {
        header("location:index.php?pesan=nik");
    }
    ?>
       