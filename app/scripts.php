
<?php

if (!isset($_SESSION)) {
    session_start();
}

//DEFINIÇÕES DE VARIÁVEIS GLOBAIS
define('DS', DIRECTORY_SEPARATOR);

unset($_SESSION['APLICACAO_URL_PROTOCOL']);

if (!isset($_SESSION['APLICACAO_URL_PROTOCOL'])) {

    /* URL BASE DO SISTEMA */
    $root = $_SERVER['DOCUMENT_ROOT'];
    $root = str_replace(trim(' \ '), DS, $root);
    $root = str_replace(trim(' / '), DS, $root);
    $_SESSION['APLICACAO_URL_HTTP_BASE'] = 'http://'.$_SERVER['HTTP_HOST'].'/trabalho_modelagem/';
    $_SESSION['APLICACAO_URL_BASE'] = $root.'/trabalho_modelagem/';
    $_SESSION['APLICACAO_URL_APP']  = $_SESSION['APLICACAO_URL_BASE'] . 'app' . DS;
    $_SESSION['APLICACAO_URL_MODEL'] = $_SESSION['APLICACAO_URL_APP'] .'model'. DS;
    $_SESSION['APLICACAO_URL_CONTROLLER'] = $_SESSION['APLICACAO_URL_APP'] . 'controller' . DS;
	$_SESSION['APLICACAO_URL_CSS']  = $_SESSION['APLICACAO_URL_BASE'] . 'css' . DS;
	$_SESSION['APLICACAO_URL_JS']  = $_SESSION['APLICACAO_URL_BASE'] . 'js' . DS;

    /* LOCATION DOS DIRETORIOS */
    $_SESSION['APLICACAO_URL_LOCATION_APP'] = $_SESSION['APLICACAO_URL_HTTP_BASE'] . 'app';
    $_SESSION['APLICACAO_URL_LOCATION_MODEL'] =$_SESSION['APLICACAO_URL_LOCATION_APP'] . 'model';
    $_SESSION['APLICACAO_URL_LOCATION_CONTROLLER'] = $_SESSION['APLICACAO_URL_LOCATION_APP'] .'/'. 'controller';
	$_SESSION['APLICACAO_URL_LOCATION_CSS'] = $_SESSION['APLICACAO_URL_HTTP_BASE'] . 'css';
	$_SESSION['APLICACAO_URL_LOCATION_JS'] = $_SESSION['APLICACAO_URL_HTTP_BASE'] . 'js';
}

function getAppName(){
	echo 'Aplicação';
}

function getFavicon(){
    echo '
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
    ';
}


function getMeta(){
	echo '
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	';
}


function getCSSCommonFiles(){
	echo '
    <link rel="stylesheet" href="../assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style/style.css">
    <link rel="stylesheet" href="../assets/css/animate/animate.min.css">  
	';
}


function getJsCommonFiles(){
	echo '
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
	
	';
}  
