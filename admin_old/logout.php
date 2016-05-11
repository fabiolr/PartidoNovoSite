<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NOVO Admin | Log Out</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php 
session_start();
session_destroy();
?>

<table width="150" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="169"><img src="../img/logo_pq.png" width="150" height="54" /></td>
  </tr>
  <tr>
    <td class = "admin">Logged Out <?php echo $_SESSION["myusername"];?></td>
  </tr>
  <tr>
    <td class="admin"><a href="index.php">LOG IN</a></td>
  </tr>
</table>

</body>
</html>