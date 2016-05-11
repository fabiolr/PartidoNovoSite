 <?php

include("../../includes/connection.php");


//////////////////////////////
// Configurações iniciais
//////////////////////////////
if(eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {

	$emailsender = 'faleconosco@novo.org.br';

} else {

	$emailsender = 'contato@' . $_SERVER[HTTP_HOST];

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
$nome     	= trim($_POST['nome']);
$email    	= trim($_POST['email']);
$tipo 		= trim($_POST['tipo']);
$mensagem 	= trim($_POST['mensagem']);


/////////////////////////////////
// Escreve Mensagem no Banco
/////////////////////////////////

/////////////////////////////////
// Checa se Nemail consta no Cadastro
/////////////////////////////////
mysql_select_db($database_connection);
$sql="SELECT date,id FROM contacts where email like '$email';";
$result = mysql_query($sql)or die(mysql_error());
if(mysql_num_rows($result) == 0) {
$cadastrado = "O e-mail '$email' <strong>NAO CONSTA</strong> na base de dados do NOVO.";
}
else {
		$cadastrado = "O e-mail '$email' <strong>CONSTA</strong> na base de dados do NOVO:<br>";
		while($row = mysql_fetch_array($result)){
		$cadastrado .= "ID: ". $row['id']." Data: ".$row['date']."<br>";
		}
	}


//////////////////////////////
// Montagem do corpo da mensagem
//////////////////////////////
$corpomensagem  = "<strong>Dados do Contato</strong><br /><br />";
$corpomensagem .= "<ul>";
$corpomensagem .= "	<li><strong>Nome</strong>: {$nome}</li>";
$corpomensagem .= "	<li><strong>E-mail</strong>: {$email}</li>";
$corpomensagem .= "	<li><strong>Tipo de mensagem</strong>: {$tipo}</li>";
$corpomensagem .= "</ul><br />";
$corpomensagem .= "<h3>Mensagem:</h3>";
$corpomensagem .= "<p>$mensagem</p>";
$corpomensagem .= "<br><br>";
$corpomensagem .= $cadastrado;


 
//////////////////////////////
// Montagem do cabeçalho
//////////////////////////////
$headers  = "MIME-Version: 1.0" . $quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
$headers .= "From: " . $email . $quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
if(strlen($cc) > 0) $headers .= "Cc: " . $comcopia . $quebra_linha;
if(strlen($cco) > 0) $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $email . $quebra_linha;
 

//////////////////////////////
// Envio da mensagem
//////////////////////////////
if(mail("faleconosco@novo.org.br", "Fale conosco - ". utf8_decode($tipo) . " - " . utf8_decode($nome), $corpomensagem, $headers)) {

	echo '<script>alert("Sua mensagem foi enviada com sucesso! Obrigado pelo contato!"); location.href = "../fale-com-a-gente.php";</script>';

} else {

	echo '<script>alert("Houve um erro no envio do seu cadastro! Por favor, tente novamente!"); location.href = "../fale-com-a-gente.php";</script>';

}
?>