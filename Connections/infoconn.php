<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_infoconn = "localhost:8888";
$database_infoconn = "student";
$username_infoconn = "studinfo";
$password_infoconn = "123456";
$infoconn = mysql_pconnect($hostname_infoconn, $username_infoconn, $password_infoconn) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("set names utf8");
?>