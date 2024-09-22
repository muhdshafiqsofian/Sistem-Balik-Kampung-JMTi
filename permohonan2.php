<?php
include("connect.inc");

$id = $_REQUEST["id"];
$nama = $_REQUEST["nama"];
$noid = $_REQUEST["noid"];
$tarikh = $_REQUEST["tarikh"];
$alamat = $_REQUEST["alamat"];
$tujuan = $_REQUEST["tujuan"];
$keputusan = $_REQUEST["radio"];

$save="insert into permohonan (nama, noid, tarikh, alamat, tujuan, keputusan) values ('$nama', '$noid', '$tarikh', '$alamat', '$tujuan', '$keputusan')";

mysql_query($save) or die ("Query Error");

header("Location:rekod.php");
?>