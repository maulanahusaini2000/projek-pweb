<html>
<head>
</head>
<body  bgcolor="red"><a href="index.html">HOME</a>
</body>
<center>
<?php
echo "<head><title>GUEST BOOK</title></head>"; //judul di tempat peletakkan link
$fp = fopen("bukutamu.txt","r"); //dipanggil nantinya dan akan di tampilkan pada bukutamu.html
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";//untuk pengisi para tamu yaitu namanya
echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";//untuk pengisi alamat tamu yg mau diisi
echo "<tr><td>Jenis Kelamin </td><td>: $pisah[2]</td></tr>";//untuk meletakkan jenis kelamin parra tamu
"<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku Tamu Lagi </a>";//link untuk kembali ke pengisian buku tamu lagi
echo "<br>";
?>
</center>
</html>