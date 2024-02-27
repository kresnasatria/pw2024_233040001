<?php
// Latihan Cari Volume Kubus Manual
// Sisi Kubus a = 9, sisi kubus b = 4
// hitung total volume kedua kubus

// $sisi_a = "9";
// $sisi_b = "4";

// Total Volume Kubus A + B
// $volume_a = $sisi_a * $sisi_a * $sisi_a;  
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b; 
// echo "Total Volume Kubus A & B adalah = $total"; 
// echo "<br>";


// Latihan Volume Kubus Auto

function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;  
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    // Cara Cepat 
    // return $a ** 3 + $b ** 3; 
    
    return $total;
}

echo "Total Volume Kubus A & B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total Volume Kubus C & D = " . total_volume_dua_kubus(10, 15);






?>