<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$txt = "welcome.txt"; 
$fh = fopen($txt, 'w+'); 
if (isset($_POST['editor1'])) { // check if  fields are set
   $txt=$_POST['editor1']; 
   file_put_contents('welcome.txt',$txt."\n"); // put to welcome.txt 
   exit();
}
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
    ?>
<span class="admin">Conteúdo alterado com sucesso.<BR />
<a href="welcome.php">Voltar</a></span>
</body>
</html>