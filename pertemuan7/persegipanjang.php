<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>persegi panjang</h1>
    <form action="persegipanjangaction.php" method="post">
        <table>
            <tr>
                <td>panjang</td>
                <td>:</td>
                <td><input type="number" name="panjang"><br></td>
            </tr>

            <tr>
                <td>lebar</td>
                <td>:</td>
                <td> <input type="number" name="lebar"><br></td>
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
                <td>     <input type="submit" value="Hitung"></td>
            </tr>
    </form>
</body>
</html>