<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trapesium</title>
</head>
<body>
    <?php
    $sisi_atas=20;
    $sisi_bawah=32;
    $sisi_miring=18;
    $tinggi=15;
    $luas=1/2*($sisi_atas+$sisi_bawah)*$tinggi;
    $keliling=$sisi_atas+$sisi_miring+$sisi_bawah+$sisi_miring;
    ?> 
    <a href="index.php">Home</a>
    <h1>trapesium</h1>
    <h4>Luas = 1/2 x (jumlah sisi sejajar) x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = sisi 1 + sisi 2 + sisi 3 + sisi 4 = <?php echo $keliling;?></h4>
    <img src="trapesium.jpg" alt="">
</body>
</html>