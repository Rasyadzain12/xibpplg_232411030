<html>
<head>
    <title> kue</title>
</head>
<body>
    <form action="tambah_kue_proses.php" method="POST">
    <table border="1">
<tr>
    <td colspan="2" align="center">INPUT DATA KUE</td>
</tr>
<tr>
    <td>Kode Kue</td>
    <td><input type="text" name="kode"required placeholder="Masukkan Kode Kue"></td>
</tr>
<tr>
    <td>Nama Kue</td>
    <td><input type="text" name="nama"required placeholder="Masukkan Nama Kue"></td>
</tr>
<tr>
    <td>Rating Kue</td>
    <td><select name="rating" 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
    </td>
</tr>
<tr>
            <td>Catatan</td>
            <td><textarea name="alamat" required placeholder="Masukkan Catatan Anda"></textarea></td>
         </tr>
<tr>
    <td colspan="2" align="center">
                    <input type="submit" value="simpan" value="SIMPAN">
                    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
</table>
</form>    
</body>
</html>