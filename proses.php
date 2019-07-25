<html>
<head>
	<title>GUEST BOOK</title>
</head>

<center>
<body bgcolor="red" >
<div class="jumbotron">

<?php
$fp = fopen("bukutamu.txt","a+");
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];


fputs($fp,"$nama|$alamat|$jk\n");
fclose($fp);
echo "Terima Kasih Telah Mengisi<br>";//penampilan kata ketika pengunjung telah mengisi
echo "<a class=btn href=daftar.php> Lihat Pengunjung </a><br>";//link melihat pengunjung
echo "<a class=btn href=buku.html> Kembali Ke isi Buku Tamu </a><br>";//link kembali ke nuku tamu
?>
</div>
</body>
<a href="index.html">HOME</a>
</center>
</html>