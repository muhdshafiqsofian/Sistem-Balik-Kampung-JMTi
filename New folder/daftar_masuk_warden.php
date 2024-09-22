<?php require_once('Connections/sbka.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nama_pengguna'])) {
  $loginUsername=$_POST['nama_pengguna'];
  $password=$_POST['kata_laluan'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "warden.php";
  $MM_redirectLoginFailed = "salah_warden.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_sbka, $sbka);
  
  $LoginRS__query=sprintf("SELECT nama_pengguna, kata_laluan FROM daftar_masuk WHERE nama_pengguna=%s AND kata_laluan=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $sbka) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SBKA | Laman Utama</title>
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
  <div id="menu"> <span id="fontmenu"><b><a href="index.php">LAMAN UTAMA</a> | </b><span class="fontmenu2"><b>WARDEN</b></span><b> | DAFTAR SEKARANG !</b></span> </div>
  <!--End menu-->
  <!--Start body-->
  <div id="body">

<form action="<?php echo $loginFormAction; ?>" method="POST" id="login">

<table width="319">
  <tr>
    <td width="157">NAMA PENGGUNA :</td>
    <td width="150"><label for="nama_pengguna"></label>
      <input type="text" name="nama_pengguna" id="nama_pengguna" />
 </td>
  </tr>
  <tr>
    <td>KATA LALUAN : </td>
    <td><label for="kata_laluan"></label>
      <input type="password" name="kata_laluan" id="kata_laluan" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" id="button" value="DAFTAR MASUK" />
      <input type="reset" name="button2" id="button2" value="ISI SEMULA" /></td>
  </tr>
</table>
</form>

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
