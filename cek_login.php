<?php
session_start();
include 'koneksilog.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek >0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>