<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trapesium</title>
</head>
<body>
<?php
    $alas_atas=$_POST['alas_atas'];
    $alas_bawah=$_POST['alas_bawah'];
    $tinggi=$_POST['tinggi'];
    $sisi_1=$_POST['sisi_1'];
    $sisi_2=$_POST['sisi_2'];

    $luas=0.5* ($alas_atas + $alas_bawah) * $tinggi;
    $keliling=$alas_atas * $alas_bawah *$sisi_1 *$sisi_2;
    $pilih=$_POST['pilih'];
    ?>

<a href="index.php">Home</a>
   <h1>trapesium</h1> 
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling = a x b x c x d= 
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas =  1/2 x (a+b) x t=
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas =  1/2 x (a+b) x t=
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = a x b x c x d= 
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

   <!-- <h4>Luas = 1/2 x (a+b) x t= <?php echo $luas;?></h4> -->
   <!-- <h4>keliling= a x b x c x d= <?php echo $keliling;?></h4> -->
   <img src="trapesium.jpg" widht="200" height="200" alt="">
</body>
</html>