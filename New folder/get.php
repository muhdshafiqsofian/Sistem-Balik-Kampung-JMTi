<?php

include("conn.inc");

session_start(); //memulakan session
$namaid = $_REQUEST["namaid"];
$katalaluan = $_REQUEST["katalaluan"];

//Memilih dalam table
$qry = "SELECT * FROM admin WHERE namaid='$namaid' AND katalaluan='$katalaluan'";
$qry2 = "SELECT * FROM pengguna WHERE namaid='$namaid' AND katalaluan='$katalaluan'";

	$result = mysql_query($qry);
	$result2 = mysql_query($qry2);
 
	//Menghantar maklumat
	if(mysql_num_rows($result) > 0) 
	{
		$_SESSION["login"] = TRUE;
		setcookie("namaid",$namaid);
		header("location:admin.php");
	}
	else if(mysql_num_rows($result2) > 0)
	{
		$_SESSION["login"] = TRUE;
		setcookie("namaid",$namaid);
		header("location:index2.html");
	}
	else 
	{
		echo "<script>alert('TIADA DALAM PANGKALAN')</script>";
		echo "<script>location.href='index.html'</script>";
	}
?>
