
<?php

$dbhost="localhost";
$dbuser="root";
$dbroot="";
$dbbase="sbka";

$connect=mysql_connect($dbhost, $dbuser, $dbroot);

if(!$connect)
{
	die("Tidak dapat connect ke server".mysql_error());
}

$db=mysql_select_db($dbbase);

if(!$db)
{
	die("Tak dapat buka database".mysql_error());
}

?>