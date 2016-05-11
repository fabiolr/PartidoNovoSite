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
$estado = $_SESSION["estado"];
if (isset($_POST["muda"])) $estado = $_POST["muda"];

?>
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="67">&nbsp;</td>
    <td width="597"><img src="../img/monitora_cadastros_t.gif" alt="QUADRO DE AVISOS" /></td>
    <td width="136"><img src="../img/<?php echo $estado;?>.gif" width="30" height="30" alt="ESTADO"></td>

  </tr>
</table>
<p class="admin"><strong> Estat&iacute;sticas de <?php echo $estado;?> </strong></p>
<P>


<?php if ($_SESSION["admin"] == 1): ?>
<!-- Eliminando muda estado pois jÃƒÆ’Ã‚Â¡ tem no menu lateral 

<FORM action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<INPUT type="text" style="width:40px;" name="muda" id="muda"><input type="submit" name="submit" value="Mudar de Estado" />
</FORM>
<?php endif ?>
-->
<?php

include("../includes/connection.php");

mysql_select_db($database_connection);

$sql="SELECT count(id) FROM contacts where estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$total = $row["count(id)"];

$sql="select count(distinct(email)) from contacts where estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$distintos = $row["count(distinct(email))"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= date AND estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$tdias = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 7 DAY) <= date AND estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$sdias = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY) <= date AND estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$udia = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE(date) = CURDATE() AND estado = '$estado';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$hoje = $row["count(id)"];

// Filtro Cidade
if (isset($_POST["cidade"])) {	
	$cidade = $_POST["cidade"];
	$sql = "SELECT name,email,cidade,date FROM contacts WHERE estado = '$estado' AND cidade = '$cidade' ORDER BY id DESC LIMIT 30;";
}
else {
$sql = "SELECT name,email,cidade,date FROM contacts WHERE estado = '$estado' ORDER BY id DESC LIMIT 30;";
}

$result = mysql_query($sql);

$erros = ($distintos / $total) * 100;
$erros = number_format($erros, 2, ',', '');


?>
<table class="admin">
  <tr>
    <td>TOTAL</td>
    <td><?php echo $total;?></TD>
  </tr>
   <tr>
    <td>Distintos</td>
    <td><?php echo $distintos."  (".$erros."%)";?></TD>
  </tr>
  <tr>
    <td>Ultimos 30 Dias</td>
    <td><?php echo $tdias;?></TD>
  </tr>
  <tr>
    <td>Ultimos 7 Dias</td>
    <td><?php echo $sdias;?></TD>
  </tr>
  <tr>
    <td>Ultimas 24 Hrs</td>
    <td><?php echo $udia;?></TD>
  </tr>
  <tr>
    <td>Hoje (UTC)</td>
    <td><?php echo $hoje;?></TD>
  </tr>
</table>

<?php /* if ($_SESSION["admin"] == 1): */?>
<!--  Codigo para Admin -->

<FORM action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<INPUT type="text" style="width:150px;" name="cidade" id="cidade"><input type="submit" name="submit" value="Filtra Cidade" />
</FORM>
<?php /* endif */ ?>
<p class="admin"><strong> Estat&iacute;sticas de <?php echo $cidade." - ".$estado;?> </strong></p>

<?php
mysql_select_db($database_connection);

$sql="SELECT count(id) FROM contacts where estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$total = $row["count(id)"];

$sql="select count(distinct(email)) from contacts where estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$distintos = $row["count(distinct(email))"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= date AND estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$tdias = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 7 DAY) <= date AND estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$sdias = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY) <= date AND estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$udia = $row["count(id)"];

$sql="SELECT count(id) FROM contacts WHERE DATE(date) = CURDATE() AND estado = '$estado' AND cidade = '$cidade';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$hoje = $row["count(id)"];

// Filtro Cidade
if (isset($_POST["cidade"])) {	
	$cidade = $_POST["cidade"];
	$sql = "SELECT name,email,cidade,date FROM contacts WHERE estado = '$estado' AND cidade = '$cidade' ORDER BY id DESC LIMIT 30;";
}
else {
$sql = "SELECT name,email,cidade,date FROM contacts WHERE estado = '$estado' ORDER BY id DESC LIMIT 30;";
}

$result = mysql_query($sql);

$erros = ($distintos / $total) * 100;
$erros = number_format($erros, 2, ',', '');


?>
<table class="admin">
  <tr>
    <td>TOTAL</td>
    <td><?php echo $total;?></TD>
  </tr>
   <tr>
    <td>Distintos</td>
    <td><?php echo $distintos."  (".$erros."%)";?></TD>
  </tr>
  <tr>
    <td>Ultimos 30 Dias</td>
    <td><?php echo $tdias;?></TD>
  </tr>
  <tr>
    <td>Ultimos 7 Dias</td>
    <td><?php echo $sdias;?></TD>
  </tr>
  <tr>
    <td>Ultimas 24 Hrs</td>
    <td><?php echo $udia;?></TD>
  </tr>
  <tr>
    <td>Hoje (UTC)</td>
    <td><?php echo $hoje;?></TD>
  </tr>
</table>
<p class="admin"><strong> Ultimos 30 Cadastrados de <?php echo $cidade." - ".$estado;?> </strong></p>






<table class="admin">
  <tr class="header">
    <td>Nome</td>
    <td>email</td>
    <td>Cidade</td>
	<td>Data / Hora UTC</td>

  </tr>
  <?php
        $i = 0;
	while ($row = mysql_fetch_array($result)) {
               $class = ($i == 0) ? "" : "alt";
               echo "<tr class=\"".$class."\">";
               echo "<td>".utf8_encode($row["name"])."</td>";
               $email = $row["email"];
			   $em = explode("@",$email);
				$name = $em[0];
				$len = strlen($name);
				$showLen = floor($len/2);
				$str_arr = str_split($name);
				for($ii=$showLen;$ii<$len;$ii++){
    			$str_arr[$ii] = '*';
				}
				$em[0] = implode('',$str_arr); 
				$new_name = implode('@',$em);
			   echo "<td>".$new_name."</td>";
               echo "<td>".utf8_encode($row["cidade"])."</td>";
	           echo "<td>".$row["date"]."</td>";
               echo "</tr>";
               $i = ($i==0) ? 1:0;
           }

        ?>
</table>
</body>
</html>
