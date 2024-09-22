<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) 
{
header('Location: index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SBKA | Pelajar</title>
<!-- InstanceEndEditable -->
<link href="layout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #cdcdcd;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!--Start kotak1-->
<div id="kotak1">
<!--Start kotak2--><!-- InstanceBeginEditable name="EditRegion1" -->
<div id="kotak2">
  <!--Start header-->
  <div id="header">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="100" id="FlashID" title="Bank JMTi">
      <param name="movie" value="images/swfheader.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="images/swfheader.swf" width="800" height="100">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </div>
  <!--End header-->
  <!--Start menu-->
  <div id="menu"> 
  
  <span id="fontmenu"><b><a href="maklumat_pelajar.php">ISI MAKLUMAT</a> | <a href="kemaskini_profil_pelajar.php">KEMASKINI</a> | <a href="rekod.php">REKOD</a> | <a href="permohonan.php">MEMBUAT PERMOHONAN</a></b></span> 
  <span id="fontmenulogout">
  <b><a href="logout.php">DAFTAR KELUAR</a></b>
  </span>
  </div>
  <!--End menu-->
  <!--Start body-->
  <div id="body"> 
    <span id="fontbody">
    <br />
    <center>
	<b>SELAMAT DATANG <?php echo $_COOKIE["namapengguna"]?>
    <br /><br>
    PROFIL ANDA
    </b>
    
	<?php
	include("connect.inc");
	
	$nama=$_COOKIE["namapengguna"];
	
	$qry = "select * from maklumat where nama LIKE '%$nama%'";

	$query = mysql_query($qry) or die ("query error".mysql_error());


	while($result=mysql_fetch_array($query))
	{
	?>
        <span id="tablebody">
    	    <table width="499" border="0">
      <tr>
        <td width="157">NAMA ANDA</td>
        <td width="21">:</td>
        <td width="299"><?php echo $result['nama'];?> </td>
      </tr>
      <tr>
        <td>NO ID</td>
        <td>:</td>
        <td><?php echo $result['noid'];?></td>
      </tr>
      <tr>
        <td>NO K/P</td>
        <td>:</td>
        <td><?php echo $result['nokp'];?></td>
      </tr>
      <tr>
        <td>NO TELEFON</td>
        <td>:</td>
        <td><?php echo $result['notel'];?></td>
      </tr>
      <tr>
        <td height="49">ALAMAT</td>
        <td>:</td>
        <td><?php echo $result['alamat'];?></td>
      </tr>
      <tr>
        <td>NO BILIK</td>
        <td>:</td>
        <td><?php echo $result['nobilik'];?></td>
      </tr>
      <tr>
        <td>BLOK</td>
        <td>:</td>
        <td><?php echo $result['blok'];?></td>
      </tr>
      <tr>
        <td>JABATAN</td>
        <td>:</td>
        <td><?php echo $result['jabatan'];?></td>
      </tr>
      <tr>
        <td>SEMESTER</td>
        <td>:</td>
        <td><?php echo $result['semester'];?></td>
      </tr>
    </table>
    <?php
	}
	?>
    </center>
    </span>
    </span>
    
  </div>
  <!--End body-->
  <!--Start footer-->
  <div id="footer"> <span id="fontfooter">HAK CIPTA TERPELIHARA - UNIT PENGURUSAN ASRAMA &copy; 2013 SISTEM BALIK KAMPUNG ASRAMA </span> </div>
  <!--End footer-->
</div>
<!--End kotak2-->
<!-- InstanceEndEditable --></div>
<!--ENd kotak1-->

<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd --></html>