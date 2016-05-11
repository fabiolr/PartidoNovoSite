<?php

include("../includes/connection.php");

//////////////////////////////
// Configurações iniciais
//////////////////////////////
if(eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {

	$emailsender = 'cadastro@novo.org.br';

} else {

	$emailsender = 'cadastro@' . $_SERVER[HTTP_HOST];

}
 
if(PHP_OS == "Linux") {

	$quebra_linha = "\n";

} elseif(PHP_OS == "WINNT") {

	$quebra_linha = "\r\n";

} else {

 	die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

}




//////////////////////////////
// Captação dos dados do formulário
//////////////////////////////
$nome     		= trim($_POST['nome']);
$email    		= trim($_POST['email']);
$profissao 		= trim($_POST['profissao']);
$telefone 		= trim($_POST['telefone']);
$endereco 		= trim($_POST['endereco']);
$numero 		= trim($_POST['numero']);
$cep 			= trim($_POST['cep']);
$cidade 		= trim($_POST['cidade']);
$estado 		= trim($_POST['estado']);
$sms	 		= trim($_POST['sms']);
$charset_check 	= $_POST['charset_check'];

if (bin2hex($charset_check) == "c3a4e284a2c2ae") { 

} elseif (bin2hex($test) == "e499ae") {
 
	$nome = iconv("windows-1252", "utf-8", $nome);
	$profissao = iconv("windows-1252", "utf-8", $profissao);
	$endereco = iconv("windows-1252", "utf-8", $endereco);
	$cidade = iconv("windows-1252", "utf-8", $cidade);

} else {

  die("Desculpe, nao reconheço estes caracteres!");

}

/// TRATAR O NUMERO DO TELEDONE E EXTRAIR DDD
$telefone = filter_var($telefone, FILTER_SANITIZE_NUMBER_INT);
$telefone = preg_replace("/[^0-9]/",'',$telefone); // pega só os numeros
$telefone = preg_replace("/^0+(?!$)/",'',$telefone); // remove zero inicial
if (strlen($telefone) > 9) {  // ta com ddd
$ddd = substr($telefone, 0, 2);
$telefone = substr($telefone, 2, 9);
}


$ip = gethostbyname($_SERVER['REMOTE_ADDR']);

mysql_set_charset('utf8', $connection);
mysql_select_db($database_connection, $connection);

$insert_query = sprintf("INSERT INTO contacts (name, email, profissao, ddd, tel, endereco, numero, complemento, CEP, Cidade, Estado, date, ip, sms) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, NOW(), %s, %s)",
						sanitize($nome, "text"),
						sanitize($email, "text"),
						sanitize($profissao, "text"),
						sanitize($ddd, "text"),
						sanitize($telefone, "text"),
						sanitize($endereco, "text"),
						sanitize($numero, "text"),
						"NULL",
						sanitize($cep, "text"),
						sanitize($cidade, "text"),
						sanitize($estado, "text"),
						sanitize($ip, "text"),
						sanitize($sms, "text"));

$result = mysql_query($insert_query, $connection) or die(mysql_error());
 
 
//////////////////////////////
// Montagem do corpo da mensagem
//////////////////////////////
$mensagem  = "<br />Este usu&aacute;rio se cadastrou pelo site.<br /><br />";
$mensagem .= "<ul>";
$mensagem .= "	<li><strong>Nome</strong>: {$nome}</li>";
$mensagem .= "	<li><strong>E-mail</strong>: {$email}</li>";
$mensagem .= "	<li><strong>Profiss&atilde;o</strong>: {$profissao}</li>";
$mensagem .= "	<li><strong>Telefone</strong>: {$telefone}</li>";
$mensagem .= "	<li><strong>Endere&ccedil;o</strong>: {$endereco}, {$numero}</li>";
$mensagem .= "	<li><strong>CEP</strong>: {$cep}</li>";
$mensagem .= "	<li><strong>Local</strong>: {$cidade} / {$estado}</li>";
$mensagem .= "	<li><strong>IP</strong>: {$ip}</li>";
$mensagem .= "</ul><br /><br />";
$mensagem .= "Este cadastro j&aacute; foi inclu&iacute;do na base de dados do NOVO";

 
//////////////////////////////
// Montagem do cabeçalho
//////////////////////////////
$headers  = "MIME-Version: 1.1" . $quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
$headers .= "From: " . $nome . " <" . $email . ">" . $quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
if(strlen($cc) > 0) $headers .= "Cc: " . $comcopia . $quebra_linha;
if(strlen($cco) > 0) $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $email . $quebra_linha;


//////////////////////////////
// Montagem do corpo da mensagem de agradecimento
//////////////////////////////
$mensagemagrad  = "Obrigado pelo seu interesse no Partido NOVO.<br /><br />";
$mensagemagrad .= "Você receberá notícias esporadicamente por e-mail.<br /><br />";
$mensagemagrad .= "Acompanhe e participe da discussão de idéias curtindo nossa página do <a href='http://facebook.com/partidonovo' target='_blank'>Facebook</a>.<br /><br />Atenciosamente,<br><br>Equipe do NOVO.";

//////////////////////////////
// Montagem do cabeçalho da mensagem de agradecimento
//////////////////////////////
$headersagrad  = "MIME-Version: 1.1" . $quebra_linha;
$headersagrad .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
$headersagrad .= "From: Partido NOVO <" . $emailsender . " >" . $quebra_linha;
$headersagrad .= "Return-Path: " . $emailsender . $quebra_linha;
if(strlen($cc) > 0) $headers .= "Cc: " . $comcopia . $quebra_linha;
if(strlen($cco) > 0) $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headersagrad .= "Reply-To: " . $emailsender . $quebra_linha;

//////////////////////////////
// Envio das mensagens
//////////////////////////////
if(mail("cadastro@novo.org.br", "Novo cadastro de {$nome}", $mensagem, $headers) &&
	mail("$email", "Confirmação de cadastro no NOVO!", $mensagemagrad, $headersagrad)) {

	//header("Location: ../cadastro.php?enviado=1#cadastro");
	echo '<script>alert("Seu cadastro para acompanhar nossas novidades foi feito com sucesso! Dentro de instantes você receberá um e-mail de confirmação."); location.href = "../cadastro.php";</script>';

} else {

	echo '<script>alert("Houve um erro no envio do seu cadastro! Por favor, tente novamente!"); location.href = "../cadastro.php";</script>';

}

function sanitize($value, $type) 
{
	$value = (!get_magic_quotes_gpc()) ? addslashes($value) : $value;

	switch ($type) {

		case "text":
		  	$value = ($value != "") ? "'" . $value . "'" : "NULL";
		  	break;    
		  	
		case "long":
		case "int":
		  	$value = ($value != "") ? intval($value) : "NULL";
		  	break;

		case "double":
		  	$value = ($value != "") ? "'" . doubleval($value) . "'" : "NULL";
		  	break;

		case "date":
		  	$value = ($value != "") ? "'" . $value . "'" : "NULL";
		  	break;

	}

	return $value;
}
?>