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
<title>SBKA | Kemaskini Profil</title>
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
  
  <span id="fontmenu"><b><a href="index_pelajar.php">PROFIL</a> | <a href="maklumat_pelajar.php">ISI MAKLUMAT</a> | <a href="permohonan.php">MEMBUAT PERMOHONAN</a></b></span> 
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
    KEMASKINI MAKLUMAT ANDA
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
 		  <form action="kemaskini.php" method="post" name="maklumat" id="maklumat">
    <table align="center">
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">ID :</td>
        <td><input name="id" type="text" id="id" value="<?php echo $result['id'];?>" disabled>
	<input name="id" type="hidden" value="<?php echo $result['id'];?>" /></td>
      </tr>
      <tr valign="baseline">
        <td width="81" align="right" nowrap="nowrap">NAMA :</td>
        <td width="335"><input type="text" name="nama" value="<?php echo $result['nama'];?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">NO ID :</td>
        <td><input type="text" name="noid" value="<?php echo $result['noid'];?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">NO K/P :</td>
        <td><input type="text" name="nokp" value="<?php echo $result['nokp'];?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">NO TELEFON :</td>
        <td><input type="text" name="notel" value="<?php echo $result['notel'];?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right" valign="top">ALAMAT :</td>
        <td><textarea name="alamat" cols="50" rows="5"> <?php echo $result['alamat'];?></textarea></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">NO BILIK :</td>
        <td><input type="text" name="nobilik" value="<?php echo $result['nobilik'];?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">BLOK:</td>
        <td valign="baseline"><table>
          <tr>
            <td><input type="radio" name="blok" value="BUNGA RAYA" />
              BR</td>
            <td><input type="radio" name="blok" value="BUNGA KEKWA" />
              BK</td>
              <td><input type="radio" name="blok" value="BUNGA SAKURA" />
              BS</td>
          </tr>
        </table></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">JABATAN :</td>
        <td><select name="jabatan">
          <option>- SILA PILIH -</option>
          <option value="TEK. KEJ. KOMPUTER">TEK. KEJ. KOMPUTER</option>
          <option value="TEK. KEJ. ELEKTRONIK">TEK. KEJ. ELEKTRONIK</option>
          <option value="TEK. KEJ. MEKATRONIK">TEK. KEJ. MEKATRONIK</option>
          <option value="TEK. KEJ. PEMBUATAN">TEK. KEJ. PEMBUATAN</option>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">SEMESTER :</td>
        <td><select name="semester">
          <option>- SILA PILIH -</option>
          <option value="SEMESTER 1">SEMESTER 1</option>
          <option value="SEMESTER 2">SEMESTER 2</option>
          <option value="SEMESTER 3">SEMESTER 3</option>
          <option value="SEMESTER 4">SEMESTER 4</option>
          <option value="SEMESTER 5">SEMESTER 5</option>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="KEMASKINI" /></td>
      </tr>
    </table>
  </form>
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