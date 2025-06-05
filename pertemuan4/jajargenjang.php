<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajargenjang</title>
</head>
<body>
<?php
    $alas=15;
    $tinggi=8;
    $sisi_alas=15;
    $sisi_miring=8;
    $luas=$alas*$tinggi;
    $keliling=2*($sisi_alas+$sisi_miring);
    ?>
    <a href="index.php">home</a>
    <h1>jajargenjang</h1>
    <h4>Luas = alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = 2 x (sisi alas + sisi miring) = <?php echo $keliling;?></h4>
    <img src="Jajar-Genjang.jpg" alt="">
</body>
</html>