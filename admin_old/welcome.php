<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bem Vindo</title>
<link href="../css/mainold.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:main_login.php");
}

$txt = "welcome.txt"; 
$conteudo = file_get_contents($txt);
$username = $_SESSION["myusername"];
$md5 = md5($username);
$link = "<a target=\"_blank\" href=\"http://go.novo.org.br/".$md5."  \">aqui</a> ";
?>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100">&nbsp;</td>
    <td width="700"><img src="../img/quadro_avisos.gif" width="504" height="53" alt="QUADRO DE AVISOS" /></td>
  </tr>
</table>
<P>
  <?php if ($_SESSION["admin"] != 1):?> 

<p class="admin"><strong>Caro L&iacute;der de <?php echo $_SESSION["myusername"];?>, Acesse <?php echo $link;?> sua pasta pessoal.</strong></p>
<?php endif;?>

<P>

  
<div font-size: 20px; class="admin">
<?php echo $conteudo;?>
</div>
</body>
</html>
