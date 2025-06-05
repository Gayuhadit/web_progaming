<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>
    <?php
    $phi=3.14;
    $r=$_POST['jari_jari'];
    $luas=$phi*$r*$r;
    $keliling=2*$phi*$r;
    ?>

<h1>lingkaran</h1>
<a href="index.php">Home</a>

    <h4>Luas = π x r²
    (r = jari-jari, π ≈ 3,14 atau 22/7) = <?php echo $luas;?></h4>
    <h4>keliling =2 x π x r = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
    <img src="Lingkaran.jpg" alt="Ilustrasi Lingkaran" width="300">
</body>
</html>