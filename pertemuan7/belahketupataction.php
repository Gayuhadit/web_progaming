<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belah ketupat</title>
</head>
<body>
    <?php
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $sisi=$_POST['sisi'];

    $luas=0.5* $d1*$d2;
    $keliling= 4* $sisi;
    $pilih = $_POST['pilih'];
    ?>

    <a href="index.php">Home</a>
     <h1>belah ketupat</h1>
     <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling = 4 x sisi =
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas =  0.5 x d1 x d2 = 
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = 0.5 x d1 x d2 = 
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = 4 x sisi =
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

    <!-- <h4>Luas = 0.5 x d1 x d2 = <?php echo $luas;?></h4> -->
    <!-- <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4> -->
    <img src="belah-ketupatjpg.jpg" widht="300" height="300" alt="">
</body>
</html>