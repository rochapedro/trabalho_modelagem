<?php
if (!isset($_SESSION['APLICACAO_URL_APP'])){
  session_start();
}


if (isset($_REQUEST['funcao'])){
    require_once($_SESSION['APLICACAO_URL_MODEL'].'Midia.php');
    $funcao = $_REQUEST['funcao'];
    switch ($funcao) {
        
    }
}else{
  require_once($_SESSION['APLICACAO_URL_MODEL'].'Midia.php');
}

class MidiaController {
    
    public static function showBanners(){
        $data = new Midia();
        $data = $data->getBanners();
        
        $i = 0;

        $return = '';
        foreach ($data as $row){
          if($i == 0){
            $return .= '
            <div class="carousel-item active">
              <img class="d-block w-100" src="'.$row->caminho.'" alt="First slide" style="height: 1050px;">
            </div>
            ';
          } else {
            $return .= '
            <div class="carousel-item">
              <img class="d-block w-100" src="'.$row->caminho.'" alt="First slide" style="height: 1050px;">
            </div>
            ';
          }
            
        $i++;
        }
        return $return;
    }

    

}






