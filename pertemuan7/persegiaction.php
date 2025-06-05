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
$pilih = $_POST['pilih'];
        ?>

<a href="index.php">Home</a>
    <h1>persegi</h1>
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
                        Luas = sisi x sisi =
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = sisi x sisi =
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

    <!-- <h4>Luas = sisi x sisi = <?php echo $luas;?></h4> -->
    <!-- <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4> -->
    <img src="persegi.jpg" widht="200" height="200" alt="ilang">
</body>

</html>