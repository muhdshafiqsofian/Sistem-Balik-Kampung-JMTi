<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sbka = "localhost";
$database_sbka = "sbka";
$username_sbka = "root";
$password_sbka = "";
$sbka = mysql_pconnect($hostname_sbka, $username_sbka, $password_sbka) or trigger_error(mysql_error(),E_USER_ERROR); 
?>