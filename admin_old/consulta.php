<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resultado Consulta</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>

<BR />
<?php
include("../includes/connection.php");
mysql_select_db($database_connection);

$email = $_POST["email"];
$estado = $_SESSION["estado"];
$admin = $_POST["admin"];

if ($admin != "1")
$sql="SELECT name,email,cidade,Estado,tel,date FROM contacts where email like '$email' and estado = '$estado';";
if ($admin == "1")
$sql="SELECT name,email,cidade,Estado,tel,date FROM contacts where email like '$email';";


$result = mysql_query($sql)or die(mysql_error());

echo "<table>";
echo "<tr><th>Name</th><th>email</th><th>Cidade</th><th>UF</th><th>Tel</th><th>Data</th></tr>";
while($row = mysql_fetch_array($result)){
	

echo "<tr><td style='width: 300px;'>".utf8_encode($row["name"])."</td><td style='width: 200px;'>".$row['email']."</td><td>".utf8_encode($row["cidade"])."</td><td>".$row["Estado"]."</td><td>".$row["tel"]."</td><td>".$row["date"]."</td></tr>";
}
echo "</table>";
mysql_close();
?>

</body>
</html>