<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layang2</title>
</head>
<body>

<a href="index.php">Home</a>
    <h1>layang2</h1>
    <form action="layang2copy.php" method="post">
        <table>
            <tr>
                <td>Diagonal 1</td>
                <td>:</td>
                <td> <input type="number" name="d1"><br></td>
            </tr>

            <tr>
                <td>Diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="d2"><br></td>
            </tr>

            <tr>
                <td>Sisi 1</td>
                <td>:</td>
                <td><input type="number" name="sisi_1"><br></td>
            </tr>

            <tr>
                <td> Sisi 2</td>
                <td>:</td>
                <td><input type="number" name="sisi_2"><br></td>
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
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>