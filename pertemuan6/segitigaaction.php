<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
    $sisi_miring=$_POST['sisi_miring'];
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $luas=0.5*$alas*$tinggi;
    $keliling=$alas+$tinggi+$sisi_miring;
    
    ?>

<h1>Segitiga</h1>
<a href="index.php">Home</a>

    <h4>Luas = ½ x alas x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = alas + tinggi + sisi miring= <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
    <img src="Gambar-Segitiga.jpg" alt="Ilustrasi Segitiga" width="300">
</body>
</html>