<?php

include("connect.inc");

//This code is to delete data
if($_REQUEST["action"]=="padam")
{
	$id=$_REQUEST["id"];
	
	$delete = mysql_query("delete from permohonan where id = $id");
	header("Location:rekod.php");
}
?>