<?php

$nisn    = $_POST['nisn'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis   = $_POST['jenis'];
$alamat  = $_POST['alamat'];


echo "<pre>";
echo "<h1>TAMPIL BIODATA SISWA</h1><br>";
echo "=================================<br>";
echo "NISN          : $nisn<br>";
echo "Nama          : $nama<br>";
echo "Jurusan       : $jurusan<br>";
echo "Jenis         : $jenis<br>";
echo "Alamat        : $alamat<br>";
echo "=================================<br>";
echo "</pre>";

?>
<a href="input biodata.php">Input Lagi Bisa Kali</a>