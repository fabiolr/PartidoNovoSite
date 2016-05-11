<?php

session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
$estado = $_SESSION["estado"];
$admin = $_SESSION["admin"];
$all = $_GET["all"];

require_once("../includes/connection.php");

mysql_select_db($database_connection, $connection);
mysql_set_charset('utf8',$connection);

$csv_output = "name,email";
$csv_output .= "\n";


$i = 2;
if ($admin != "1" OR $all ==  NULL)
$values = mysql_query("SELECT name,email FROM `contacts` where `Estado` = '$estado' AND `opt_out` NOT LIKE '1' order by id");
if ($admin == "1" AND  $all == "1") {
$values = mysql_query("SELECT name,email FROM `contacts` WHERE `opt_out` NOT LIKE '1' order by id");
$estado = 'BR';
}
	while ($rowr = mysql_fetch_row($values)) {
		for ($j=0;$j<$i;$j++) {
		$csv_output .= ucwords(strtolower($rowr[$j])).",";
		}
	$csv_output .= "\n";
	}
	


$filename = "MailingNOVO_".$estado."_".date("Y-m-d_H-i",time());
//header("Content-type: application/vnd.ms-excel");
header("Content-type: application/force-download");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header( "Content-disposition: filename=".$filename.".csv");
//print utf8_decode($csv_output); 
print $csv_output; 

exit;
?>