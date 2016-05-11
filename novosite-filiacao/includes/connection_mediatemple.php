<?php
$hostname_connection = "external-db.s60092.gridserver.com";
$database_connection = "db60092_novocad";
$username_connection = "db60092_cadastro";
$password_connection = "jugth6yoj2vith7oc2ow8is6ov2act9a";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR);
?>
