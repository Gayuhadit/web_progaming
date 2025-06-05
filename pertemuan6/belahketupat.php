<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
<h1>Belah ketupat</h1>
<a href="index.php">Home</a>

<form action="belahketupataction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="sisi">Masukan sisi</label></td>
      <td>:</td>
      <td><input type="number" name="sisi" id="sisi" required></td>
    </tr>
    <tr>
      <td><label for="d1">Masukan Diagonal 1</label></td>
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
        <img src="belah-ketupatjpg.jpg" alt="Ilustrasi belah ketupat" width="300">
      </td>
    </tr>
  </table>
</form>

</body>
</html>