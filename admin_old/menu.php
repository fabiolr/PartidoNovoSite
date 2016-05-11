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
    <td width="214"><img src="../img/logo_intranet.gif" width="180" height="30" /></td>
  </tr>
  <tr>
    <td class = "admin">Ol&aacute; <?php echo $_SESSION["myusername"];?>.</td>
  </tr>
  <tr>
    <td height="25" class="admin"><a href="welcome.php" target="mainFrame"><img src="../img/home.gif" width="30" height="30" alt="home" /></a><img src="../img/separador.gif" width="30" height="30" /><a href="logout.php" target="_parent"><img src="../img/logout.gif" width="30" height="30" alt="logout" /></a></td>
  </tr>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="grava_evento.php" target="mainFrame"><img src="../img/eventos.gif" width="180" height="30" alt="eventos" /></a></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#fffffff" class="admin"><a href="contatos.php" target="mainFrame"><img src="../img/contatos.gif" width="180" height="30" alt="contatos" /></a></td>
  </tr>
  <tr>
    <td class="admin">&nbsp;</td>
  </tr>
  <tr>
   <td height="25" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;"><img src="../img/brasil.gif" width="180" height="30" /></td>
  </tr>
  <tr>
   <td height="25" bgcolor="#ffffff" class="admin"><a href="monitora_cadastros.php" target="mainFrame"><img src="../img/novos_cadastros.gif" width="180" height="30" alt="novos cadastros" /></a></td>
  </tr>
  <?php if ($_SESSION["admin"] == 1):?>
	<tr>
    	<td height="25" bgcolor="#ffffff" class="admin">
        	<a href="gera_lista.php?all=1" target="mainFrame"><img src="../img/download_csv.gif" width="180" height="30" alt="csv" /></a>
        </td>
  </tr>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="base/" target="mainFrame"><img src="../img/editar_cadastro.gif" width="180" height="30" alt="editar" /></a></td>
  </tr>

  <tr>
    <td height="25" class="admin"><form action="consulta.php" target="mainFrame" method="post">
<label for="email"></label><input type="text" name="email" id="email" /><input type="hidden" name="admin" id="admin" value="1" /><input type="submit" style="width:90px; height:30px; vertical-align:central;" name="submit" value="Procura Email" />
</form></td></tr>

	<?php endif; ?>

  
  <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
  <?php if ($_SESSION["admin"] == 1):?> <tr>
    <td height="30" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;">
 
    <FORM action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <img src="../img/<?php echo $estado;?>.gif" width="30" height="30" valign="center"/>
	<INPUT type="text" style="width:30px; height:30px; vertical-align:central;" name="muda" id="muda"><input type="submit" style="width:50px; height:30px; vertical-align:central;" name="submit" value="Muda" />
	</FORM>
    </td>
  </tr>	<?php endif ?>
   <?php if ($_SESSION["admin"] != 1):?> <tr>
    <td height="25" class="admin" style="font-size: 12px; color: #040404; font-weight: bold;"> <img src="../img/<?php echo $estado;?>.gif" width="30" height="30" valign="center"/>
    </td>
  </tr>	<?php endif ?>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="monitora_cadastros_estado.php" target="mainFrame"><img src="../img/novos_cadastros.gif" width="180" height="30" /></a></td>
  </tr>
  <?php if ($_SESSION["admin"] == 1):?>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="gera_lista.php" target="mainFrame"><img src="../img/download_csv.gif" width="180" height="30" /></a></td>
  </tr>
	<?php endif ?>


  <!--
  <tr>
      <td height="25" bgcolor="#ffffff" class="admin"><a href="base/" target="mainFrame"><img src="../img/editar_cadastro.gif" width="180" height="30" alt="editar" /></a></td>
  </tr>
  	-->
  <tr>
   <td height="25" class="admin"><form action="consulta.php" target="mainFrame" method="post">
<label for="email"></label><input type="text" name="email" id="email" /><input type="submit" name="submit" style="width:90px; height:30px; vertical-align:central;" value="Procura Email" />
</form></td>
  </tr>
    <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="http://go.novo.org.br/cria.php" target="mainFrame"><img src="../img/novo_url.gif" width="150" height="30" alt="url" /></a><a href="http://go.novo.org.br/admin" target="mainFrame"><img src="../img/adm.gif" width="30" height="30" /></a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="https://www.google.com/a/novo.org.br" target="_blank"><img src="../img/gmail.gif" width="150" height="30" alt="gmail" /></a><a href="https://admin.google.com/AdminHome" target="_blank"><img src="../img/adm.gif" width="30" height="30" /></a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="http://loja.novo.org.br" target="_blank"><img src="../img/novo_loja.gif" width="150" height="30" alt="loja" /></a><a href="http://loja.novo.org.br/admin" target="_blank"><img src="../img/adm.gif" width="30" height="30" /></a></td>
  </tr>
    <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="http://forum.novo.org.br" target="_blank"><img src="../img/novo_forum.gif" width="150" height="30" alt="forum" /></a><a href="http://forum.novo.org.br/admin" target="_blank"><img src="../img/adm.gif" width="30" height="30" /></a></td>
  </tr>
    <tr>
    <td height="25" class="admin">&nbsp;</td>
  </tr>
     <?php if ($_SESSION["admin"] == 1):?><tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="editwelcome.php" target="mainFrame"><img src="../img/editar_home.gif" width="180" height="30" alt="edit home" /></a></td>
  </tr>
<tr>
  </tr>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="editcontatos.php" target="mainFrame"><img src="../img/inserir_eventos.gif" width="180" height="30" alt="inserir eventos" /></a></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#ffffff" class="admin"><a href="links_lideres.php" target="mainFrame"><img src="../img/PASTAS.gif" width="180" height="30" alt="inserir eventos" /></a></td>
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
