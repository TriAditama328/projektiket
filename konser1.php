<?php
echo "<center>";
echo "<font size=8>";
echo "<b>Tiket Konser<br>Payung Teduh";
echo "<hr>";
echo "<table>";
$tiket=$_POST['tiket'];
$jumlah=$_POST['jumlah'];
$noUrut=100;
$noUrut++;
echo "$noUrut";
if($tiket=="Reguler")$harga=20000;
if($tiket=="VIP")$harga=40000;
$totalharga=$jumlah*$harga;
$totalbayar=$totalharga;

echo "<tr><td>Tiket<td>:$tiket";
echo "<tr><td>Harga<td>:";
echo "Rp.".number_format($harga,2,',',',');
echo "<tr><td>Jumblah<td>:$jumlah";
echo "<tr><td colspan=3><hr>";
echo "<tr><td>Total Harga<td>:";
echo "Rp.".number_format($totalharga,2,',',',');
echo "<tr><td>Nomor ID<td>:";
echo "".number_format($noUrut++);
echo "<tr><td>Total Bayar<td>:";
echo "Rp.".number_format($totalbayar,2,',',',');
?>
