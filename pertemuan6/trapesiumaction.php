<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
    $sisi_1=$_POST['sisi_1'];
    $sisi_2=$_POST['sisi_2'];
    $tinggi=$_POST['tinggi'];
    $alas_1=$_POST['alas_1'];
    $alas_2=$_POST['alas_2'];
    $luas=1/2*($alas_1+$alas_2)*$tinggi;
    $keliling=$alas_1+$alas_2+$sisi_1+$sisi_2;
    ?>

<h1>Trapesium</h1>
<a href="index.php">Home</a>

    <h4>Luas  ½ x (alas 1 x alas 2) x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = alas 1 x alas 2 x sisi 1 x sisi 2 = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
        <img src="Trapesium.jpg" alt="Ilustrasi Trapesium" width="300">
</body>
</html>