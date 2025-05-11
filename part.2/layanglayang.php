<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layanglayang</title>
</head>
<body>
    <?php
    $diagonal1=10;
    $diagonal2=25;
    $sisi1=12;
    $sisi2=27;
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisi1+$diagonal2);
    ?>
    <a href="index.php">Home</a>
    <h1>layanglayang</h1>
    <h4>keliling = 2 x (sisi 1 + sisi 2) = <?php echo $luas;?><h4>
    <img src="gambar-layang-layang.jpg" alt="">
</body>
</html>