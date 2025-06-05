<!DOCTYPE html>Add commentMore actions
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajargenjang</title>
</head>
<body>
  
<a href="index.php">Home</a>
   <h1>jajargenjang</h1> 
   <form action="jajargenjangaction.php" method="post">
    <table>
        <tr>
            <td>Alas</td>
            <td>:</td>
            <td><input type="number" name="alas"><br></td>
        </tr>

        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td> <input type="number" name="tinggi"><br></td>
        </tr>

        <tr>
            <td>Sisi Miring</td>
            <td>:</td>
            <td><input type="number" name="sisi miring"><br></td>
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