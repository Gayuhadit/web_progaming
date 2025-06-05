<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
</head>
<body>
   
<a href="index.php">Home</a>
    <h1>persegi</h1>
    <form action="persegiaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
            </tr>


            <tr>
                <td>pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas" required>
                <label for="html">Luas</label> <br>
                <input type="radio" name="pilih" value="keliling" required>
                <label for="html">keliling</label> <br>
                <input type="radio" name="pilih" value="semua" required>
                <label for="html">semua</label> <br>
                </td>
                <td>

                </td>
            </tr>
        </table>      
        <td><input type="submit" value="Hitung Luas Dan Keliling"></td>
    </form>
</body>
</html>