<?php
  include 'layout/header.php'
?>

?>
<div class="container">
<?php
  include '../koneksi/koneksi.php';

  $buku = mysqli_query($koneksi, "SELECT * FROM buku");
  $user = mysqli_query($koneksi, "SELECT * FROM user");
  $peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

  $b = mysqli_num_rows($buku);
  $u = mysqli_num_rows($user);
  $p = mysqli_num_rows($peminjaman);

?>
  <div class="row my-3" >
    <div class="col sm-3">
      <div class="card">
        <div class="card-body text-white bg-warning">
        <h2>Data Buku</h2>
        <h1><b><?php echo $b;?></b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
    <div class="col sm-3">
      <div class="card">
        <div class="card-body text-white bg-success">
        <h2>Data Anggota</h2>
        <h1><b><?php echo $u?></b></h1>
        </div>
        <a href="anggota_pmj.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
    <div class="col sm-3">
      <div class="card">
        <div class="card-body text-white bg-success">
        <h2>Data Peminjaman</h2>
        <h1><b><?php echo $p?></b></h1>
        </div>
        <a href="peminjam_pmj.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row" style="margin-top: 5rem;">
    <div class="col-sm-7" style="margin-top: 5rem;">
      <h3>Selamat Datang</h3>
      <h5>di Halaman Perpustakaan Digital</h5>
      <samp>Mari membaca karna membaca adalah jendela dunia</samp>
    </div>
    <div class="col-sm-5">
      <img src="../asset/img/MariBaca.png" width="400px" alt="">
    </div>
  </div>
</div>



<?php
  include 'layout/footer.php'
?>