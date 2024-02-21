<?php 

$first_name = "Kresna";
$middle_names ="Satria";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo $first_name . $middle_names . "<br>";
    } else if ($i % 3 == 0) {
        echo $first_name . "<br>";
    } else if ($i % 5 == 0) {
        echo $middle_names . "<br>";
    } else {
        echo $i . "<br>";
    }
}
?>