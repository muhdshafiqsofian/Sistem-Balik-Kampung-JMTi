<?php
include("connect.inc");

$id = $_REQUEST["id"];
$nama = $_REQUEST["nama"];
$noid = $_REQUEST["noid"];
$nokp = $_REQUEST["nokp"];
$notel = $_REQUEST["notel"];
$alamat = $_REQUEST["alamat"];
$nobilik = $_REQUEST["nobilik"];
$blok = $_REQUEST["blok"];
$jabatan = $_REQUEST["jabatan"];
$semester = $_REQUEST["semester"];

$save="update maklumat set nama = '$nama', noid = '$noid', nokp = '$nokp', notel = '$notel', alamat = '$alamat', nobilik = '$nobilik', blok = '$blok', jabatan = '$jabatan', semester = '$semester' where id = $id";

mysql_query($save) or die ("Query Error");

header("Location:index_pelajar.php");
?>