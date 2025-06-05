<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>
    <?php
    $d1=$_POST['diagonal1'];
    $d2=$_POST['diagonal2'];
    $luas=0.5*$d1*$d2;
    $sisi_panjang=$_POST['sisi_panjang'];
    $sisi_pendek=$_POST['sisi_pendek'];
    $keliling=2*($sisi_panjang+$sisi_pendek);
    ?>

<h1>Layang Layang</h1>
<a href="index.php">Home</a>

    <h4>Luas = 1/2 x d1 x d2 = <?php echo $luas;?></h4>
    <h4>keliling = 2 x (sisi panjang + sisi pendek) = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
    <img src="gambar-layang-layang.jpg" alt="Ilustrasi Layang layang" width="300">
</body>
</html>