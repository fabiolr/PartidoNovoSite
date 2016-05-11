<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Intranet NOVO</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>
<table width="707" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="369"><img src="../img/logo_pq.png" width="150" height="54"></td>
    <td width="338" class="admin">Ol&aacute; <?php echo $_SESSION["myusername"];?><br />
    <a href="logout.php">Log Out</a></td>
  </tr>
</table>
<p class="admin"><strong>Admin Partido Novo</strong>
<p class="admin"><a href="monitora_cadastros.php">Monitorar Novos Cadastros do Brasil Todo</a>

<p class="admin"><a href="monitora_cadastros_estado.php">Monitorar Novos Cadastros do seu Estado (<?php echo $_SESSION["estado"];?>)</a>

<p class="admin"><a href="gera_lista.php">Exportar Cadastros de <?php echo $_SESSION["estado"];?> em .csv</a> <br />Arquivo pronto para importar no MadMimi</p>

<p class="admin"><strong>Consulta email de <?php echo $_SESSION["estado"];?></strong>
<br />
<FORM action="consulta.php" method="post">
<LABEL for="email">email: </LABEL><INPUT type="text" name="email" id="email"><input type="submit" name="submit" value="Procura" />
</FORM>


<p>
  <?php if ($_SESSION["admin"] == 1): ?>

  <!-- Colocar aqui as coisas que só o ADMIN vê -->
</p>
<hr>

<p class="admin"><strong>Acesso Restrito Diretorio Nacional:</strong>

<p class="admin"><strong>Consulta email no cadastro nacional:</strong><br />
<FORM action="consulta.php" method="post">
<LABEL for="email">email: </LABEL><INPUT type="text" name="email" id="email"><INPUT type="hidden" name="admin" id="admin" value="1"><input type="submit" name="submit" value="Procura" />
</FORM>

<p class="admin"><a href="gera_lista.php?all=1">Exportar Cadastros de do Brasil todo em .csv</a> <br />Arquivo pronto para importar no MadMimi</p>

<p><span class="admin"><a href="site.php">Monitorar Site do NOVO</a> <br />
</span>
<p class="admin"><a href="base/">Editar Cadastro</a>
<?php endif ?>

</body>
</html>
