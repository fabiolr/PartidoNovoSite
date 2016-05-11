<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../css/main.css" rel="stylesheet" type="text/css">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>InsereEvento</title>
</head>

<body>
<?php 

session_start();
if(!session_is_registered('myusername')){
header("location:main_login.php");
}


include("../includes/connection.php");
mysql_select_db($database_connection, $connection);

if (count($_POST) > 0) {


$nome     		= trim($_POST['nome']);
$apresentador	= trim($_POST['apresentador']);
$dia    		= trim($_POST['dia']);
$mes 			= trim($_POST['mes']);
$ano 			= trim($_POST['ano']);
$hora 			= trim($_POST['hora']);
$local     		= trim($_POST['local']);
$url    		= trim($_POST['url']);

$data = $ano . "-" . $mes . "-" . $dia;

mysql_set_charset('utf8', $connection);

$insert_query = "INSERT INTO eventos (nome, apresentador, data, hora, local, url) VALUES ('$nome', '$apresentador','$data','$hora','$local','$url');";

$result = mysql_query($insert_query, $connection) or die(mysql_error());
$sucesso = "Evento Inserido com Sucesso";

}


$select_query = "SELECT * FROM `eventos` WHERE `data` >= CURDATE() ORDER by `data` ASC;"; 
$result2 = mysql_query($select_query, $connection) or die(mysql_error());



?>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100">&nbsp;</td>
    <td width="700"><img src="../img/proximos_eventos.gif" width="504" height="53" alt="QUADRO DE AVISOS" /></td>
  </tr>
</table>
	
<P>
<P>


<table class="admin" width="1137" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="236">Nome do Evento</th>
    <th width="128">Apresentador</th>
    <th width="90">Data</th>
    <th width="136">Horário</th>
    <th width="177">Local</th>
    <th align ="center" width="68">URL </th>
	<th width="302">Short</th>

  </tr>
  <?php
  echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_array($result2))
{
    echo "<tr>";
    echo "<td height=\"30\">".utf8_encode($row["nome"])."</td>";
    echo "<td height=\"30\">".utf8_encode($row["apresentador"])."</td>";
    echo "<td height=\"30\">".utf8_encode($row["data"])."</td>";
    echo "<td height=\"30\">".utf8_encode($row["hora"])."</td>";
    echo "<td height=\"30\">".utf8_encode($row["local"])."</td>";
    echo "<td height=\"30\" align=\"center\"><a href=\"".$row["url"]."\">Link</a></td>";
	$coisa = "'".$row["url"]."'";
$url_query = "select alias from url.phurl_urls where url = $coisa ORDER by `date_added` DESC LIMIT 1;";

$alias = mysql_query($url_query, $connection) or die(mysql_error());
$linha = mysql_fetch_array($alias);

    if (isset($linha[0])){ 
		echo "<td>go.novo.org.br/".$linha[0]."</td>"; }
		else { echo "<td><a href=\"http://go.novo.org.br/cria.php\">ENCURTE ESSA URL</a></TD>";
	}
    echo "</tr>\n";
}
  ?>
</table>

<P>
<p>&nbsp;</p>
 <?php if ($_SESSION["admin"] == 1):?>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100">&nbsp;</td>
    <td width="700"><img src="../img/inserir_evento.gif" alt="QUADRO DE AVISOS" /></td>
  </tr>
</table>
<p class= "admin"><strong>Antes de inserir um evento oficial:</strong><br />
- Certifique-se que o evento realmente está confirmado.<br />
- Cuide da ortografia e da padronização do nome. Esses dados vão aparecer no SITE  automaticamente.<br />
- Não use URL encurtada aqui.
<br />
</p>
<form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
  <table class = "admin" width="551" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td width="124" class="admin">Nome do Evento</td>
    <td width="427">
      <label for="nome"></label>
      <input name="nome" type="text" id="nome" size="40" />
  </td>
    <tr>
    <td width="124" class="admin">Apresentador</td>
    <td width="427">
      <label for="apresentador"></label>
      <input name="apresentador" type="text" id="apresentador" size="40" />
  </td>

  </tr>
  <tr>
    <td class="admin">Data</td>
    <td>
      <label for="dia"></label>
      <select name="dia" id="dia">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>

      </select>
      <label for="mes"></label>
      <select name="mes" id="mes">
  <option value="1">Jan</option>
  <option value="2">Fev</option>
  <option value="3">Mar</option>
  <option value="4">Abr</option>
  <option value="5">Mai</option>
  <option value="6">Jun</option>
  <option value="7">Jul</option>
  <option value="8">Ago</option>
  <option value="9">Set</option>
  <option value="10">Out</option>
  <option value="11">Nov</option>
  <option value="12">Dez</option>

      </select>
      <label for="ano"></label>
      <select name="ano" id="ano">
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>

      </select>
	</td>
  </tr>
  <tr>
    <td class="admin">Hora</td>
    <td><label for="hora"></label>
    <input type="text" name="hora" id="hora" value="Das 20 às 22hrs"/></td>
  </tr>
  <tr>
    <td class="admin">Local</td>
    <td><label for="local"></label>
    <input name="local" type="text" id="local" size="60"/></td>
  </tr>
  <tr class="admin">
    <td colspan="2">URL
      <label for="url"></label>
      <input name="url" type="text" id="url" size="60" /></td>
    </tr>
  </table>
<p>
  <input style="width:120px; height:30px;" type="submit" name="envia" id="envia" value="INSERE EVENTO" /><span class = "admin"><?php echo $sucesso;?></span>
</p>
</form>
	<?php endif; ?>


<p><br />
</p>
<p>&nbsp;</p>




</body>
</html>