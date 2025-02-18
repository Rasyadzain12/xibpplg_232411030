<html>
    <head>
        <title>Buku Online</title>
    </head>
<body>
    <form action="tampilbukuonline.php" method="POST">
<pre>
    <h3>INPUT BUKU ONLINE</h3>
<hr>
Nama  Pembeli         <input type="text" name="nama"><br>
Judul Buku            <input type="text" name="judul"><br>
Jenis Buku            <select name="jenis">
                      <option value="selected">-Pilih-</option>
                      <option value="COMIC">COMIC</option>
                      <option value="PELAJARAN">PELAJARAN</option>
                      <option value="NOVEL">NOVEL</option>
                      </select><br>
Pembayaran      <input type="radio" name="pembayaran" value="COD">COD<br>
                <input type="radio" name="pembayaran" value="Transfer">Transfer<br>
Alamat                
<textarea name="alamat" id=""></textarea>

<input type="submit" name="TAMPIL">  <input type="reset" name="batal" value="BATAL">
</pre>
</form>
</body>
</html>