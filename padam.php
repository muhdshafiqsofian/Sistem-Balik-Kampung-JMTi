<?php

include("connect.inc");

//This code is to delete data
if($_REQUEST["action"]=="padam")
{
	$nama=$_REQUEST["nama_pengguna"];
	
	$delete = mysql_query("delete from pelajar where nama_pengguna LIKE '%$nama%'");
	header("Location:index_warden.php");
}
?>