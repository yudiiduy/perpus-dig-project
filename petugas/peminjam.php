<?php
include 'layout/header.php'

?>
<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
   <h2>Data Peminjam</h2>
   <table class="table my-2">
   <a href="data/pinjam_buku.php" class="btn btn-success">Tambah Peminjaman</a>
        <thead class="table table-warning">
            <tr>
            <th scope="col">ID Peminjaman</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Status Pinjam</th>
            <th scope="col">Aksi</th>
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
            <td>
                <a href="data/detail_peminjaman.php?idpeminjaman=<?php echo $d['IDpeminjaman'];?>" class="btn btn-primary text-white">Detail</a>
                <a href="" class="btn btn-warning text-white">Edit</a>
                <a href="data/delete_peminjaman.php?idpeminjaman=<?php echo $d['IDpeminjaman'];?>" class="btn btn-danger text-white">Delete</a>
            </td>
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