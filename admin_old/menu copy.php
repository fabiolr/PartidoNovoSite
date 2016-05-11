<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Menu</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
if (isset($_POST["muda"])) $_SESSION["estado"] = $_POST["muda"];
$estado = $_SESSION["estado"];

?>

<table width="214" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="214"><img src="../img/logo_pq.png" width="150" height="54" /></td>
  </tr>
  <tr>
    <td class = "admin">Ol&aacute; <?php echo $_SESSION["myusername"];?>.</td>
  </tr>
  <tr>
    <td height="25" class="admin"><a href="logout.php" target="_parent">LOG OUT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="welcome.php" target="mainFrame">HOME</a></td>
  </tr>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="grava_evento.php" target="mainFrame">CALENDARIO DE EVENTOS</a></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#ECECEC" class="admin"><a href="contatos.php" target="mainFrame">CONTATOS</a></td>
  </tr>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
  <tr>
   <td height="25" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;">CADASTRO BRASIL</td>
  </tr>
  <tr>
   <td height="25" bgcolor="#CCCCCC" class="admin"><a href="monitora_cadastros.php" target="mainFrame">NOVOS CADASTROS</a></td>
  </tr>
  <?php if ($_SESSION["admin"] == 1):?>
	<tr>
    	<td height="25" bgcolor="#ECECEC" class="admin">
        	<a href="gera_lista.php?all=1" target="mainFrame">DOWNLOAD .CSV</a>
        </td>
  </tr>
  <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="base/" target="mainFrame">EDITAR CADASTROS</a></td>
  </tr>

  <tr>
    <td height="25" class="admin"><form action="consulta.php" target="mainFrame" method="post">
<label for="email"></label><input type="text" name="email" id="email" /><input type="hidden" name="admin" id="admin" value="1" /><input type="submit" name="submit" value="Procura Email" />
</form></td></tr>

	<?php endif; ?>

  
  <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
  <?php if ($_SESSION["admin"] == 1):?> <tr>
    <td height="25" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;">
   
    <FORM action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><?php echo $estado;?>
	<INPUT type="text" style="width:30px;" name="muda" id="muda"><input type="submit" name="submit" value="Muda" />
	</FORM>
    </td>
  </tr>	<?php endif ?>
   <?php if ($_SESSION["admin"] != 1):?> <tr>
    <td height="25" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;">CADASTRO <?php echo $estado;?>
    </td>
  </tr>	<?php endif ?>
  <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="monitora_cadastros_estado.php" target="mainFrame">NOVOS CADASTROS</a></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#ECECEC" class="admin"><a href="gera_lista.php" target="mainFrame">DOWNLOAD .CSV</a></td>
  </tr>
  <tr>
   <td height="25" class="admin"><form action="consulta.php" target="mainFrame" method="post">
<label for="email"></label><input type="text" name="email" id="email" /><input type="submit" name="submit" value="Procura Email" />
</form></td>
  </tr>
    <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
    <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="http://go.novo.org.br/cria.php" target="mainFrame">URL SHORTNER</a> |  <a href="http://go.novo.org.br/admin" target="mainFrame">admin</a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ECECEC" class="admin"><a href="https://www.google.com/a/novo.org.br" target="_blank">GMAIL </a> |  <a href="https://admin.google.com/AdminHome" target="_blank">adm</a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="http://loja.novo.org.br" target="_blank">LOJA </a> | <a href="http://loja.novo.org.br/admin" target="_blank">adm</a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ECECEC" class="admin"><a href="http://forum.novo.org.br" target="_blank">FORUM</a> | <a href="http://forum.novo.org.br/admin" target="_blank">adm</a></td>
  </tr>
    <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
     <?php if ($_SESSION["admin"] == 1):?><tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="editwelcome.php" target="mainFrame">EDITAR QUADRO AVISO</a></td>
  </tr>
<tr>
  </tr>
  <tr>
    <td height="25" bgcolor="#CCCCCC" class="admin"><a href="editcontatos.php" target="mainFrame">EDITAR CONTATOS</a></td>
  </tr>
  <?php endif ?>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
</table>
</body>
</html>
