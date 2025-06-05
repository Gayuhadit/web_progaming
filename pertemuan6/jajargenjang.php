<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
<h1>Jajar Genjang</h1>
<a href="index.php">Home</a>

<form action="jajargenjangaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="alas">Masukan alas</label></td>
      <td>:</td>
      <td><input type="number" name="alas" id="alas" required></td>
    </tr>
    <tr>
      <td><label for="tinggi">Masukan tinggi</label></td>
      <td>:</td>
      <td><input type="number" name="tinggi" id="tinggi" required></td>
    </tr>
    <tr>
      <td><label for="sisimiring">Masukan sisi miring</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_miring" id="sisi_miring" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Hitung luas dan keliling">
      </td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <img src="Jajar-Genjang.jpg" alt="Ilustrasi jajar genjang" width="300">
      </td>
    </tr>
  </table>
</form>
</body>
</html>