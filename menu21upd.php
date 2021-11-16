<?php  
//bongkar paket data  
$kdfrntr=$_POST['kdfrntr'];  
$nmfrntr=$_POST['nmfrntr'];  
$unit=$_POST['unit'];  
$hrgbeli=$_POST['hrgbeli'];  
$hrgjual=$_POST['hrgjual'];
//lakukan koneksi  
include "koneksi.php";  
//lakukan update  
$csql="  
update tblfurniture set  
nmfrntr='$nmfrntr',  
unit=$unit,hrgbeli=$hrgbeli,hrgjual=$hrgjual  where kdfrntr='$kdfrntr'  
";  
$cek=$sia_connect->query($csql);  
$sia_connect->close();  
if($cek===TRUE)  
{  
 header("location:menu2.php");  }  
else 
{  
 die("UPDATE DATA GAGAL. Klik tombol Back di browser anda");  }  
?>  
11. Membuat file menu22.php 
<?php  
//bongkar paket data  
$kdfrntr=$_GET['kdfrntr'];  
include "koneksi.php";  
$cek=$sia_connect->query("delete from tblfurniture where kdfrntr='$kdfrntr'");  $sia_connect->close();  
if($cek===TRUE)  
{  
 header("location:menu2.php");  
}  
else  
{  
 die("Gagal menghapus data. Klik tombol Back");  
}  
?>
