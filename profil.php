<html>
<head>
<title>Maulana Husaini 1800018133</title>

</head>
<body bgcolor="yellow" weight="250" height="250" >
<div class="ketengah" align="center"><h3></h3></div>
    
<?php
$filecounter="counter.txt";//nama pada file.txt dan menghityng jumlah jumlah yg masuk
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 
bordercolor=#0000FF><tr>");//membuat table bentyuk dan besarnya tulisan
echo("<td width=250 valign=middle align=center>");//peletakkannya
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");//tulisannya
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);//penghitungan dan pemebriathuan untuk jumlah pengunkung yang syudah submit
?>
<a aling="center" href="buku.html" class="btn btn-primary btn-lg">Kembali Ke buku Tamu</a> 

</body>
<br>
<a href="index.html">HOME</a>

</html>