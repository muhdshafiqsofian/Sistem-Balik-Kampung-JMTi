<?php

include("connect.inc");

session_start(); //memulakan session
$nama_pengguna = $_REQUEST["nama_pengguna"];
$kata_laluan = $_REQUEST["kata_laluan"];

//Memilih dalam table
$qry = "SELECT * FROM warden WHERE nama_pengguna='$nama_pengguna' AND kata_laluan='$kata_laluan'";
$qry2 = "SELECT * FROM pelajar WHERE nama_pengguna='$nama_pengguna' AND kata_laluan='$kata_laluan'";

	$result = mysql_query($qry);
	$result2 = mysql_query($qry2);
 
	//Menghantar maklumat
	if(mysql_num_rows($result) > 0) 
	{
		$_SESSION["login"] = TRUE;
		$_SESSION['username'] = $nama_pengguna;
		setcookie("namapengguna",$nama_pengguna);
		header("location:index_warden.php");
	}
	else if(mysql_num_rows($result2) > 0)
	{
		$_SESSION["login"] = TRUE;
		$_SESSION['username'] = $nama_pengguna;
		setcookie("namapengguna",$nama_pengguna);
		header("location:index_pelajar.php");
	}
	else 
	{
		echo "<script>alert('Salah NAMA PENGGUNA atau KATA LALUAN !')</script>";
		echo "<script>location.href='salah_daftar_masuk.php'</script>";
	}
?>
