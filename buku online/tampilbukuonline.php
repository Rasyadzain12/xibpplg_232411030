<?php

$nama    = $_POST['nama'];
$judul    = $_POST['judul'];
$jenis = $_POST['jenis'];
$pembayaran   = $_POST['pembayaran'];
$alamat  = $_POST['alamat'];


echo "<pre>";
echo "<h1>TAMPIL PEMBELIAN BUKU ONLINE</h1><br>";
echo "=================================<br>";
echo "Nama Pembeli          : $nama <br>";
echo "Judul Buku    : $judul<br>";
echo "Jenis Buku    : $jenis<br>";
echo "Pembayaran    : $pembayaran<br>";
echo "Alamat       : $alamat<br>";
echo "=================================<br>";
echo "</pre>";

?>
<a href="input buku online.php">Input Lagi Bisa Kali</a>