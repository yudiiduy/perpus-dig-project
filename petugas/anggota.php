<?php
include 'layout/header.php'

?>
<div class="container">
  <div class="row" style="margin-top: 1rem;">
   <h2>Data Anggota</h2>
   <div class="col ">
        <table class="table my-3">
        <thead class="table table-warning">
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
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
            <td>
                <a href="data/detail_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-warning text-white">Detail</a>
                <a href="data/delete_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-danger text-white">Delete</a>
            </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
   </div>
  </div>
</div>

<?php
include 'layout/footer.php'

?>