<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $jarijari=$_POST['jarijari'];
    $phi=22/7;
    $luas= 1/2*$phi*$jarijari;
    $keliling=2*$phi*$jarijari;
    ?>
<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <h4>Luas = π x jari-jari = <?php echo $luas;?></h4>
    <h4>Keliling =2 x π x jari-jari = <?php echo $keliling;?></h4>
<br>
<img src="Lingkaran.jpg" alt="">
</body>
</html>