<?php
//include('../../Glimpse/index.php');
require_once("../conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Basic PHP Datagrid</title>
</head>
<body>
<?php

$base_url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '')
.'://'.$_SERVER['HTTP_HOST'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/');
$dg = new C_DataGrid ( "SELECT * FROM vw_geral", "id", "vw_geral" );

$onSelectRow = <<<ONSELECTROW
function(status, rowid)
{	
	window.location.href = "$base_url admin/start/candidato/" + rowid;
	console.log(rowid);
	console.log(status);
}
ONSELECTROW;

$onSelectRow2 = <<<ONSELECTROW2
function(status, rowid)
{
	alert('event 2');
	console.log("here");
}
ONSELECTROW2;

$rowattr = <<<ROWATTR
function (rowData, inputRowData) 
{
	return rowData.status === "OnHold" ? {style: "background-color:blue"} : {};
}
ROWATTR;

// $dg->add_event("jqGridSelectRow", $onSelectRow);
$dg->add_event ( "jqGridDblClickRow", $onSelectRow );

$dg->add_event ( "jqGridrowattr", $rowattr );

$dg->set_locale ( 'pt-br' );
$dg->set_pagesize ( 100 );
$dg->set_scroll ( true );
$dg->set_caption ( "Candidatos" );

$dg->enable_autowidth ( true )->enable_autoheight ( true );
$dg->enable_kb_nav ( true );
$dg->enable_advanced_search ( true );
$dg->enable_export ( 'EXCEL' );

$dg->display ();
?>


</div>
</body>
</html>