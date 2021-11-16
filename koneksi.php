<?php
$localhost = "localhost";
$username = "id17905348_dbfurniture_user";
$psw  = "1Duatigaempat$";
$db    = "id17905348_dbfurniture";

//membuat koneksi
$sia_connect   = new mysqli($localhost,$username,$psw,$db);

//cek apakah berhasil
if ($sia_connect->connect_error)
{
    die("connection failed : " . $sia_connect->connect_error);
}
?>