<?php
require 'functions.php';
//jika tombol tambah di klik
if(isset($_POST['tambah'])){
    // jika data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo"<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemograman Web | Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body>

    <div class="container col-8">
    <H1>Form Tambah Data Mahasiswa</H1>

    <form action="" method="POST">
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="Nama" name="nama" required>
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">Nim</label>
    <input type="text" class="form-control" id="Nim" name="Nim" required>
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email" name="Email"required>
        </div>
    <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>