<?php 

include '../../koneksi/koneksi.php';

$id = $_GET['idpeminjaman'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE IDpeminjaman='$id'");
 
header("location:../peminjam.php");

?>