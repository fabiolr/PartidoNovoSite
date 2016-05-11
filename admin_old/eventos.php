<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bem Vindo</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:main_login.php");
}

$txt = "eventos.txt"; 
$conteudo = file_get_contents($txt);

?>



<p class="admin" style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 22px; text-align: center;">  Eventos Oficiais do NOVO<br />
</p>
<span font-size: 20px; class="admin">
<?php echo $conteudo;?>
</span>
</body>
</html>
