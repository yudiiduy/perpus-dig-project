<?php
include 'layout/header.php'

?>
<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
   <h2>Data Anggota</h2>
   <a href="index_pmj.php" class="btn btn-danger">Kembali</a><hr>
   <div class="col ">
        <table class="table my-3">
        <thead class="table table-warning">
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            </tr>
        </thead>
        <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($koneksi, "SELECT * FROM user");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDuser'];?></th>
            <td><?php echo $d['nim'];?></td>
            <td><?php echo $d['namalengkap'];?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
   </div>
   </div>
  </div>
</div>

<?php
include 'layout/footer.php'

?>