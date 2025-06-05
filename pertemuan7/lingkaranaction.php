<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>
<?php
    $jari=$_POST['jari'];
    
    $luas= 3.14 * $jari * $jari;
    $keliling=2 * 3.14 * $jari;
    $pilih = $_POST['pilih'];
    ?>

<a href="index.php">Home</a>
    <h1>lingkaran</h1>
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling = 2 x phi x r = 
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas = 3.14 x jari x jari = 
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = 3.14 x jari x jari = 
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = 2 x phi x r = 
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

    <!-- <h4>Luas = 3.14 x jari x jari = <?php echo $luas;?></h4> -->
    <!-- <h4>Keliling = 2 x phi x r = <?php echo $keliling;?></h4> -->
    <img src="Lingkaran.jpg" widht="200" height="200" alt="">
</body>
</html>