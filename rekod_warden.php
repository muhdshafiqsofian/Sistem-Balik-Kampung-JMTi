<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SBKA | Rekod Pelajar</title>
<style type="text/css">
</style>
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
  <span id="fontmenu"><b><a href="index_warden.php">LAMAN UTAMA</a></b></span> 
  <span id="fontmenulogout">
  <b><a href="logout.php">DAFTAR KELUAR</a></b>
  </span>
  </div>
  <!--End menu-->
  <!--Start body-->
  <div id="body"> 
  <span id="fontbody">
    <br />
	<b>
    SENARAI REKOD & PERMOHONAN BALIK KAMPUNG
    </b><br />
    <span id="tablebodywarden">
      <table width="730" border="1">
      <tr>
        <th width="41" align="center">URUS</th>
        <th width="120" align="center">NAMA PELAJAR</th>
        <th width="48" align="center">TARIKH</th>
        <th width="162" align="center">ALAMAT</th>
        <th width="173" align="center">TUJUAN</th>
        <th width="154" align="center">KEPUTUSAN</th>
      </tr>
      </table>
	<?php
	include("connect.inc");

	$qry = "select * from permohonan";
	$query = mysql_query($qry) or die ("query error".mysql_error());
        
	while($result=mysql_fetch_array($query))
	{
	?>
	  <table width="730" border="1">
      <tr>
        <td width="41" align="center"><?php echo '<a href="padam_rekod_warden.php?action=padam&id='.$result["id"].'">PADAM</a>' ?></td>
        <td width="123" align="center"><?php echo $result["nama"];?></td>
        <td width="50" align="center"><?php echo $result["tarikh"];?></td>
        <td width="172" align="center"><?php echo $result["alamat"];?></td>
        <td width="184" align="center"><?php echo $result["tujuan"];?></td>
        <td width="152" align="center">
        <form action="sahkan_rekod_warden.php" method="post" name="form1">
        <?php echo $result["keputusan"];?>
        <input name="id" type="hidden" value="<?php echo $result['id'];?>" />
        <select name="keputusan">
          <option value="DILULUSKAN">DILULUSKAN</option>
          <option value="TIDAK DILULUSKAN">TIDAK DILULUSKAN</option>
        </select>
        <br />
        <input name="Submit" type="submit" value="SAHKAN" />
        </form>
        
        </td>
      </tr>
    </table>
    <?php
	}
	?>
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