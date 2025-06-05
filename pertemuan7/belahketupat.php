<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belah ketupat</title>
</head>
<body>

    <a href="index.php">Home</a>
     <h1>belah ketupat</h1>
     <form action="belahketupataction.php" method="post">
        <table>
            <tr>
                <td> Masukkan diagonal 1</td>
                <td>:</td>
                <td> <input type="number" name="d1"> <br></td>
            </tr>

            <tr>
                <td>Masukkan diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="d2"> <br></td>
            </tr>

            <tr>
                <td>Masukkan sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi"> <br></td>
            </tr>

             <tr>
                <td>pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas">
                <label for="html">Luas</label> <br>
                <input type="radio" name="pilih" value="keliling">
                <label for="html">keliling</label> <br>
                <input type="radio" name="pilih" value="semua">
                <label for="html">semua</label> <br>
                </td>
                <td>

                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung Luas Dan Keliling"></td>
            </tr>
        </table>
</form>
</body>
</html>