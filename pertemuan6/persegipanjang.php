<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi panjang</title>
</head>
<body>
<h1>Persegi panjang</h1>
<a href="index.php">Home</a>

    <form action="persegipanjangaction.php" method="post">
        <table cellpadding="10">
            <tr>
                <td><label for="sisi">Masukan panjang</label><br></td>
                <td>:</td>
                <td><input type="number" name="panjang" id=""></td>
            </tr>
            <tr>
                <td><label for="sisi">Masukan lebar</label><br></td>
                <td>:</td>
                <td><input type="number" name="lebar" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Hitung luas dan keliling"></td>
            </tr>
            <tr>
                <td collspan="3" align="center">
                <img src="persegi-panjang.jpg" alt="Ilustrasi Persegi panjang" width="300">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>