<?php 

include '../../koneksi/koneksi.php';

$id = $_GET['idbuku'];

mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$id'");
 
header("location:../buku.php");

?>