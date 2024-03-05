<?php 
$binatang = ["😺", "🐰", "🐵", "🐶", "🐻", "🐊", "🐮", "🦅", "🐧", "🐿️"];
?>
<?php
$makanan = ["🍕", "🍔", "🥩", "🌭", "🍭", "🍗", "🍝", "🍫", "🍟", "🧇"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .binatang, .makanan {
            width: 500px;
            background-color: salmon;
            border: 2px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="binatang">
    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach($binatang as $b) {?>
        <li><?php echo $b;?></li>
        <?php } ?>
    </ol>
    </div>
<br>
    <div class="makanan">
    <h3>Daftar Makanan</h3>
    <ul>
        <?php foreach($makanan as $b) {?>
        <li><?php echo $b;?></li>
        <?php } ?>
    </ul>
    </div>

    
</body>
</html>