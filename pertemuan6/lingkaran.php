<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>
<h1>Lingkaran</h1>
<a href="index.php">Home</a>

<form action="lingkaranaction.php" method="post">
  <table cellpadding="10">
    <tr>
      <td><label for="jari_jari">Masukan jari-jari</label></td>
      <td>:</td>
      <td><input type="number" name="jari_jari" id="jari_jari" required></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Hitung luas dan lingkaran" required>
        </td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <img src="Lingkaran.jpg" alt="Ilustrasi Lingkaran" width="400">
      </td>
    </tr>
  </table>
</form>

</body>
</html>