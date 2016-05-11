<?php 

    session_start();

    if (!$_SESSION['logged']){

        header('Location: auth.php');

    }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR" xmlns="http://www.w3.org/1999/xhtml" xmlns:na="http://schema.org/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#" xmlns:v="http://rdf.data-vocabulary.org/#"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>NOVO | Gestão e Cidadania | partido político</title>

    <meta name="viewport" content="width=1100">

    <meta name="robots" content="noindex,nofollow"/>

    <link rel="canonical" href="http://www.printongrafica.com.br" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Partido NOVO | Gestão e Cidadania" />
    <meta property="og:description" content="Conheça essa ideia. O Brasil precisa do NOVO. O NOVO precisa de você. Participe!" />
    <meta property="og:image" content="http://www.novo.org.br/logo.jpg" />
    <meta property="og:url" content="http://www.novo.org.br" />
    <meta property="og:site_name" content="Partido NOVO" />
    <meta property="article:publisher" content="https://www.facebook.com/partidonovo" />
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/text.css">
    <link rel="stylesheet" href="webfontkit/stylesheet.css">
    <link href="css/lightbox.css" rel="stylesheet" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php $page = basename($_SERVER['PHP_SELF']); ?>

    <?php if($page == 'cadastro.php') : ?>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/MascaraValidacao.js"></script>
    <?php elseif($page == 'fale-com-a-gente.php') : ?>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <?php else : ?>
    <script src="js/modernizr.min.js"></script>
    <?php endif; ?>
    <script src="js/slides.jquery.js"></script>
    <script src="js/lightbox.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,700' rel='stylesheet' type='text/css'>

</head>

<body itemscope itemtype="http://schema.org/WebPage">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=240810459277635&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>