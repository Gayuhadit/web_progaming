<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisi1=$_POST['sisi1'];
    $sisi2=$_POST['sisi2'];
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisi1+$sisi2);
    ?>
<a href="index.php">Home</a>
    <h1>Layang-layang</h1>
    <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
    <h4>Keliling = 2 x (sisi 1 + sisi 2) = <?php echo $keliling;?></h4>
    <img src="gambar-layang-layang.jpg" alt="">
</body>
</html>