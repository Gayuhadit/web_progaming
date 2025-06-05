<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
</head>
<body>
    <?php
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;
    ?>

<h1>Persegi</h1>
<a href="index.php">Home</a>

    <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
    <h4>keliling 4 x sisi = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
    <img src="Persegi.jpg" alt="Ilustrasi Persegi" width="300">
</body>
</html>