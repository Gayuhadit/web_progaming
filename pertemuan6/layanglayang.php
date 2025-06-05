<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>
<h1>Layang Layang</h1>
<a href="index.php">Home</a>

<form action="layanglayangaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="sisi_panjang">Masukan sisi panjang</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_panjang" id="sisi_panjang" required></td>
    </tr>
    <tr>
      <td><label for="sisi_pendek">Masukan sisi pendek</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_pendek" id="sisi_pendek" required></td>
    </tr>
    <tr>
      <td><label for="d2">Masukan Diagonal 1</label></td>
      <td>:</td>
      <td><input type="number" name="diagonal1" id="d1" required></td>
    </tr>
    <tr>
      <td><label for="d2">Masukan Diagonal 2</label></td>
      <td>:</td>
      <td><input type="number" name="diagonal2" id="d2" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Hitung luas dan keliling">
      </td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <img src="gambar-layang-layang.jpg" alt="Ilustrasi layang layang" width="300">
      </td>
    </tr>
  </table>
</form>
</body>
</html>