<?php 

	session_start();

	if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
	 
	    $username = $_SERVER['PHP_AUTH_USER'];
	    $password = $_SERVER['PHP_AUTH_PW'];
	 
	    if ($username == 'novo' && $password == 'pn2015'){
	        $_SESSION['logged'] = true;
	    }
	}

	if (!$_SESSION['logged']){

	    header('WWW-Authenticate: Basic realm="Pr&ecirc;mio Governador - 2014"');
	    header('HTTP/1.0 401 Unauthorized');
	 
	    echo "Credenciais inv&aacute;lidas!\n";

	    exit();
	 
	} else {
	 
	    header('Location: index.php');
	}

?>