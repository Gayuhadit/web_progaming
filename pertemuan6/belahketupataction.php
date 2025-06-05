<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <?php
    $sisi=$_POST['sisi'];
    $d1=$_POST['diagonal1'];
    $d2=$_POST['diagonal2'];
    $luas=0.5*$d1*$d2;
    $keliling=4*$sisi;
    ?>

    <h1>Belah Ketupat</h1>
    <a href="index.php">Home</a>
    <h4>Luas = 0.5 x d1 x d2 = <?php echo $luas;?></h4>
    <h4>keliling 4 x sisi = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
            <img src="belah-ketupatjpg.jpg" alt="Ilustrasi belah ketupat" width="300">
</body>
</html>