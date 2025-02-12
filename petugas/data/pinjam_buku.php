<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card" style="margin-top: 2rem;">
            <div class="row m-4">
                <div class="col-sm-7">
                    <h3>Form Peminjaman Buku</h3>
                    <a href="../peminjam.php" class="btn btn-danger m-2">Kembali</a>
                    <form action="t_pinjam.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Buku</label>
                                <input type="text" class="form-control" name="IDbuku" required>                               
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" class="form-control" name="IDuser" required id="exampleInputEmail1" aria-describedby="emailHelp">  
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" name="nama" required id="exampleInputEmail1" aria-describedby="emailHelp">  
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjam</label>
                                    <input type="date" class="form-control" name="tgl_peminjaman" required id="exampleInputEmail1" aria-describedby="emailHelp">  
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tgl_pengembalian" required id="exampleInputEmail1" aria-describedby="emailHelp">  
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status Peminjaman</label>
                            <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="dipinjam">Pinjam</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>