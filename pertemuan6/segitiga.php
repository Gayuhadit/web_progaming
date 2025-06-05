<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
<h1>Segitiga</h1>
<a href="index.php">Home</a>
    <form action="segitigaaction.php" method="post">
        <table cellpadding="10">
            <tr>
                <td><label for="sisi">Masukan alas</label><br></td>
                <td>:</td>
                <td><input type="number" name="alas" id=""></td>
            </tr>
            <tr>
                <td><label for="sisi">Masukan tinggi</label><br></td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
            <tr>
                <td><label for="sisi">Masukan sisi miring</label><br></td>
                <td>:</td>
                <td><input type="number" name="sisi_miring" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Hitung luas dan keliling"></td>
            </tr>
            <tr>
                <td collspan="3" align="center">
                <img src="Gambar-Segitiga.jpg" alt="Ilustrasi Segitiga" width="300">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>