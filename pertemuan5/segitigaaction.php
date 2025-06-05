<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $luas=1/2*$alas*$tinggi;
    $keliling=$alas*$tinggi*$tinggi;
    ?>
<a href="index.php">Home</a>
    <h1>Segitiga</h1>
    <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = alas x tinggi x tinggi = <?php echo $keliling;?></h4>
    <img src="Gambar-Segitiga.jpg" alt="Gambar-Segitiga.jpg">

</body>
</html>