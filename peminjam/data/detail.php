<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 5rem;">
        <div class="card">
            <div class="row m-4">
            <?php
                include '../../koneksi/koneksi.php';
                if (isset($_GET['idbuku'])){
                    $idbuku = $_GET['idbuku'];
                }else{
                    die ("Error, Data Tidak Ditemukan");
                }
                $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                $result = mysqli_fetch_array($query);
            
            ?>

                
                    <div class="col text-center">
                        <img src="../../petugas/asset/sampul/<?php echo $result['foto'];?>" height="300" alt="">
                    </div>
                    <div class="col">
                    <h2>Detail Buku</h2>
                    <a href="../buku.php" class="btn btn-danger">Kembali</a><hr>
                        <table>
                            <tr>
                                <td><h5>ID Buku</h5></td>
                                <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Judul Buku</h5></td>
                                <td><h5>: <?php echo $result['judul'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Penulis Buku</h5></td>
                                <td><h5>: <?php echo $result['penulis'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Penerbit Buku</h5></td>
                                <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Tahun terbit</h5></td>
                                <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                            </tr>
                        </table>

                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>