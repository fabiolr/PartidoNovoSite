<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Checando Login</title>
</head>

<body>
<?php

include("../includes/connection.php");


$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_select_db($database_connection);

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Pegar a Tabela
$row=mysql_fetch_array($result);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

session_start();
$_SESSION["myusername"] = $myusername;
$_SESSION["mypassword"] = $mypassword;
$_SESSION["estado"] = $row["estado"];
$_SESSION["admin"] = $row["admin"];

header("location:login_success_fremeset.php");
}
else {
echo "<p><strong>Wrong Username or Password </strong><br><a href=\"index.php\">Log In</a>
";
}
?>

</body>
</html>