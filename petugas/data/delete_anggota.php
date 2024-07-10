<?php 

include '../../koneksi/koneksi.php';

$id = $_GET['iduser'];

mysqli_query($koneksi, "DELETE FROM user WHERE iduser='$id'");
 
header("location:../anggota.php");

?>