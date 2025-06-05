<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
<?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi_1=$_POST['sisi_1'];
    $sisi_2=$_POST['sisi_2'];
    $sisi_3=$_POST['sisi_3'];

    $luas=0.5 * $alas * $tinggi;
    $keliling= $sisi_1 + $sisi_2 + $sisi_3;
    $pilih=$_POST['pilih'];
    ?>

<a href="index.php">Home</a>
    <h1>segitiga</h1>
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling =  sisi1 + sisi2 + sisi3=
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas =  1/2 x alas x tinggi = 
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = 1/2 x alas x tinggi = 
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = sisi1 + sisi2 + sisi3=
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

    <!-- <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas;?></h4> -->
    <!-- <h4>keliling = sisi1 + sisi2 + sisi3= <?php echo $keliling;?></h4> -->
    <img src="segitiga-bangun-datar.png" widht="200" height="200" alt="">
</body>
</html>