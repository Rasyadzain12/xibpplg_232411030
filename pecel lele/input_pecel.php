<html>
    <head>
        <title>RUMAH MAKAN</title>
    </head>
    <body>
        <table border="2">
            <form action="outputpecel.php" method="POST">
                <h3>RUMAH MAKAN PECEL LELE LELU</h3>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input type="text" name="nama" required placeholder="Masukkan Nama Anda"></td>
                </tr>
                <tr>
                    <td>Alamat Pembeli</td>
                    <td><textarea name="alamat" required placeholder="Masukkan Alamat Anda"></textarea></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td><select name="paket">
                        <option value="Paket 1">Paket 1</option>
                        <option value="Paket 2">Paket 2</option>
                        <option value="Paket 3">Paket 3</option> 
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Menu Tambahan</td>
                    <td><input type="checkbox" name="kentang">Kentang <br>
                        <input type="checkbox" name="nasi">Nasi <br>
                        <input type="checkbox" name="telur">Telur Rebus</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="PROSES" name="submit">
                        <input type="reset" value="BATAL" name="batal">    
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>