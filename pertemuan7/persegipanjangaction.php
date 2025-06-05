<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang</title>
</head>
<body>
<?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    
    $luas= $panjang * $lebar;
    $keliling= 2 * ($panjang * $lebar);
    $pilih= $_POST['pilih'];
    ?>

<a href="index.php">Home</a>
    <h1>persegi panjang</h1>
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling = 2 x panjang x lebar= 
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas = panjang x lebar = 
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                            Luas = panjang x lebar = 
                        </td>
                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling =2 x panjang x lebar= 
                        </td>
                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>


    <!-- <h4>Luas = panjang x lebar = <?php echo $luas;?></h4> -->
    <!-- <h4>keliling = 2 x panjang x lebar= <?php echo $keliling;?></h4> -->
    <img src="persegi-panjang.jpg" widht="200" height="200" alt="">
</body>
</html>