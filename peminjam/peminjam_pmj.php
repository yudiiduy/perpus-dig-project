<?php
include 'layout/header.php'

?>
<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
   <h2>Data Peminjam</h2>
   <a href="index_pmj.php" class="btn btn-danger">Kembali</a><hr>
   <table class="table my-2">
        <thead class="table table-warning">
            <tr>
            <th scope="col">ID Peminjaman</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Status Pinjam</th>
            </tr>
        </thead>
        <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['status_peminjaman'];?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
   
 
  </div>
</div>

<?php
include 'layout/footer.php'

?>