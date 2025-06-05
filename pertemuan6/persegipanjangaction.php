<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi panjang</title>
</head>
<body>
    <?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);

    ?>

<h1>Persegi panjang</h1>
<a href="index.php">Home</a>

    <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
    <h4>keliling 2 x (panjang + lebar)= <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
    <img src="persegi-panjang.jpg" alt="Ilustrasi Persegi panjang" width="300">
</body>
</html>