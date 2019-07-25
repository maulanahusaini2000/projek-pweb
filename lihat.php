<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="232_example.jpg">
	<h1 align="center">DAFTAR PENGUNJUNG</h1>
</body>

<?php
echo "<head><title>GUEST BOOK</title></head>";
$fp = fopen("bukutamu.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";//menampilkan di folder lihat  pengunjung yaitu nama
echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";//menampilkan juga di folder pengunjung yaitu alamat
echo "<tr><td>Jenis Kelamin </td><td>: $pisah[2]</td></tr>";//menampilkan juga di folder pengunjung yaitu jk
echo "<tr><td>Komentar </td><td>: $pisah[3]</td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";//dan jugsa komentar
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku tamu </a>";//pemanggilan ke buku tamu juga
echo "<br>";
echo "<a class=btn href=index.php> Profile </a>";//kembalimke profile saya
?>

</html>