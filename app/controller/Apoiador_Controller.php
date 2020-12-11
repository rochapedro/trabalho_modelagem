<?php
if (!isset($_SESSION['APLICACAO_URL_APP'])){
  session_start();
}


if (isset($_REQUEST['funcao'])){
    require_once($_SESSION['APLICACAO_URL_MODEL'].'Apoiador.php');
    $funcao = $_REQUEST['funcao'];
    switch ($funcao) {
        
    }
}else{
  require_once($_SESSION['APLICACAO_URL_MODEL'].'Apoiador.php');
}

class ApoiadorController {
    
    public static function showTotalApoiadores(){
        $data = new Apoiador();
        $data = $data->getTotalApoiadores();

        print_r($data);

        

        $return = ''.$data['total'].'';
    
        return $return;
    }

 

}






