<?php 
//bongkar paket data 
$kdfrntr=$_POST['kdfrntr']; 
$nmfrntr=$_POST['nmfrntr']; 
$unit=$_POST['unit']; 
$hrgbeli=$_POST['hrgbeli']; 
$hrgjual=$_POST['hrgjual']; 
//lakukan validasi 
if(empty($kdfrntr)) 
{ 
 die("Kode tidak Valid, klik tombol back"); 
} 
//lakukan koneksi / menambahkan isi file koneksi.php 
include "koneksi.php"; 
//lakukan penyimpanan 
$csql=" 
insert into tblfurniture 
(kdfrntr,nmfrntr,unit,hrgbeli,hrgjual) values 
('$kdfrntr','$nmfrntr','$unit',$hrgbeli,$hrgjual) 
"; 
if($sia_connect->query($csql) === TRUE) 
{ 
 //tampilkan informasi 
 print(" 
 Terima Kasih Data Sebagai Berikut:<br> 
 Kode Furniture: <b>$kdfrntr</b><br> 
 Nama Furniture: <b>$nmfrntr</b><br> 
 Unit: <b>$unit</b><br> 
 Harga Beli: <b>$hrgbeli</b><br> 
 Harga Jual: <b>$hrgjual</b><br><br> 
 Telah disimpan.<br> 
 Isi Data lagi [<a href=menu1.php>Ya</a>] [ 
 <a href=index.php>Tidak</a>]"); 
} 
else 
{ 
 echo "Error : " . $csql . "<br>" . $sia_connect->connect_error; 
} 
//menutup koneksi ke database 
$sia_connect->close(); 
?> 