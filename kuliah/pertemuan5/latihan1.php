<?php 
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Sandhika", 3.1, false];


// 2. Mencetak Isi Array
// Mencetak Satu Nilai Pada Array, Menggunakan Index
// Index Selalu Dimulai Dari 0
echo $hari[1];
echo "<br>";
echo $bulan[0], $bulan[1];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak Semua Isi Array
// var_dump() atau print_r()
// Digunakan Saat Debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);
echo "<hr>";


// 3. Memanipulasi  Isi Array
// Menambah Isi Array 
// Di Akhir: [] Atau array_push(); 
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// Di Awal: array_unshift();
array_unshift($mahasiswa, "233040001");
print_r($mahasiswa);
echo "<hr>";

// Menghapus Isi Array
// Di Belakang: array_pop();
// Di Depan array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo"<br>";
print_r($bulan);
echo "<hr>";








?>