<?php  
include "koneksi.php";  
$kdfrntr=$_GET['kdfrntr'];  
$query=$sia_connect->query("select * from tblfurniture where kdfrntr='$kdfrntr'");  $tblvar=$query->fetch_assoc();  
?>  
<html>  
<head>  
<title>Sistem Informasi Persediaan versi 2021</title>  
</head>  
<body>  
SISTEM INFORMASI PERSEDIAAN<br>  
Versi 2021<br><br>  
EDIT DATA FURNITURE<br>  
Menu: [<a href="index.php">0</a>]  
[<a href="menu1.php">1</a>]  
[<a href="menu2.php">2</a>]<br><br>  
<h2>Data Furniture</h2><br>  
<form name="menu21" method="post" action="menu21upd.php">  <input type="hidden" name="kdfrntr" value="<?php echo $kdfrntr;?>"/>  
<?php  
print("  
<table>  
 <tr>  
 <td>Kode Furniture</td>  
 <td>:</td>  
 <td><b>$kdfrntr</b></td>  
 </tr>  
 <tr>  
 <td>Nama Furniture</td>  
 <td>:</td>  
 <td><input type=text name=nmfrntr maxlength=50  
value='$tblvar[nmfrntr]'></td>  
 </tr>  
 <tr>  
 <td>Jumlah Unit</td>  
 <td>:</td>  
 <td><input type=number name=unit maxlength=5 value='$tblvar[unit]'></td>   </tr>  
 <tr>  
 <td>Harga Beli</td>  
 <td>:</td>  
 <td><input type=number name=hrgbeli maxlength=7  
value='$tblvar[hrgbeli]'></td>  
 </tr>  
 <tr>  
 <td>Harga Jual</td>  
 <td>:</td>  
 <td><input type=number name=hrgjual maxlength=7  
value='$tblvar[hrgjual]'></td>  
 </tr>  
 <tr>  
 <td></td>  
 <td></td>  
 <td><input type=submit name=tblupdate value=UPDATE></td>   </tr>  
</table>"); 
?>  
</body>  
</html>  
