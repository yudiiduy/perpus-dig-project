<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into user (nim, namalengkap, email, username, password, level)
                            values('$nim','$namalengkap','$email','$username', '$password', '$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>