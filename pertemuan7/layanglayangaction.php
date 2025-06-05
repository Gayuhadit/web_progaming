<!DOCTYPE html>Add commentMore actions
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layang2</title>
</head>
<body>
<?php
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $sisi_1=$_POST['sisi_1'];
    $sisi_2=$_POST['sisi_2'];

    $luas=0.5*$d1*$d2;
    $keliling=2 *($sisi_1+$sisi_2);
    $pilih= $_POST['pilih'];
    ?>

<a href="index.php">Home</a>
    <h1>layang2</h1>
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling = 2 x (s1+s2) =
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas =1/2 x d1 x d2 =
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = 1/2 x d1 x d2 =
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = 2 x (s1+s2) =
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

    <!-- <h4>Luas = 1/2 x d1 x d2 = <?php echo $luas;?></h4> -->
    <!-- <h4>keliling= 2 x (s1+s2) = <?php echo $keliling;?></h4> -->
    <img src="gambar-layang-layang.jpg" widht="200" height="200" alt="">
</body>
</html>Add comment