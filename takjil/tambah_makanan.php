<html>
    <head>
        <title>Takjil</title>
    </head>
    <body>
        <form action="tambah_makanan_proses.php" method="POST">
        <table border="1">
    <tr>
        <td colspan="2" align="center">INPUT DATA MAKANAN</td>
    </tr>
    <tr>
        <td>Nama Makanan</td>
        <td><input type="text" name="nama" required placeholder="Masukkan Nama Barang"></td>
    </tr>
    <tr>
        <td>Harga Makanan</td>
        <td><input type="text" name="harga" required placeholder="Masukkan Harga Barang"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="cetak" value="SIMPAN">
                        <input type="reset" name="batal" value="BATAL">
        </td>
    </tr>
    </table>
    </form>    
    </body>
    </html>