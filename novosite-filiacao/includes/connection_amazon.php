<?php
$hostname_connection = "novo.cjwhiywpsgop.sa-east-1.rds.amazonaws.com";
$database_connection = "cadastro";
$username_connection = "novo_master";
$password_connection = "ThhHNXBvv66HDi";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR);
?>
