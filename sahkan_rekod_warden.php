<?php
include("connect.inc");

$id = $_REQUEST["id"];
$keputusan = $_REQUEST["keputusan"];


$save="update permohonan set keputusan = '$keputusan' where id = $id";

mysql_query($save) or die ("Query Error");

header("Location:rekod_warden.php");
?>