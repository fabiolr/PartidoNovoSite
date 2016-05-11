<html>
<head>
<meta charset="ISO-8859-1">
<meta http-equiv=Content-Type content="text/html; charset=UTF-8"> 
<title>Cadastros NOVO</title>
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>

<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100">&nbsp;</td>
    <td width="700">Links de Lideres</td>
  </tr>
</table>
<?php

if ($_SESSION["admin"] == 1):

?>
<table class="admin">
  <tr class="header">
    <td>Nome</td>
    <td>MD5</td>
    <td>Pasta Pessoal</td>

  </tr>
<?php


include("../includes/connection.php");

mysql_select_db($database_connection);

$sql="SELECT username FROM members;";
$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
               $class = ($i == 0) ? "" : "alt";
               echo "<tr class=\"".$class."\">";
               echo "<td>".utf8_encode($row["username"])."</td>";
			   $md5 = md5($row["username"]);
			   echo "<td>".$md5."</td>";
			   $link = "<a href=\"http://go.novo.org.br/".$md5."\">Link</a>";
			   echo "<td>".$link."</td>";

               //echo "<td><a href=\"go.novo.org.br/".md5($row["password"])."/>Link</a></td>";
               echo "</tr>";
               $i = ($i==0) ? 1:0;
           }

        ?>
<?php endif ?>

</table>
</body>
</html>


