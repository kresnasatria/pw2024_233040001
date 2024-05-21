<?php 

function koneksi () {
  // Koneksi ke database
  $conn = mysqli_connect('localhost', 'root', '','pw2024_233040001');
  return $conn;
}

function query ($query) {
  // Koneksi ke database
  $conn = koneksi();

  //query isi tabel mahasiswa
  $result = mysqli_query ($conn, $query);
  
  //menyiapkan data mahasiswa
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;

}


function tambah($data) 
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $Nim = htmlspecialchars($data['Nim']);
  $Email = htmlspecialchars($data['Email']);    
  $jurusan = htmlspecialchars($data['jurusan']);  

  $query = "INSERT INTO mahasiswa
              VALUES (null, '$nama', '$Nim', '$Email', '$jurusan')
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


?>