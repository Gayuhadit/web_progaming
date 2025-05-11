<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegipanjang</title>
</head>
<body>
    <?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
    ?>
<a href="index.php">Home</a>
    <h1>persegipanjang</h1>
    <h4>Luas = panjang x lebar =<?php echo $luas;?></h4>
    <h4>keliling 2 x (panjang + lebar) = <?php echo $keliling;?></h4>
    <img src="persegi-panjang.jpg" alt="">
</body>
</html>