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

    public static function showInfoSobre(){
      $data = new Midia();
      $data = $data->getInfoProjeto();

      $return = '';
      foreach ($data as $row){
      
          $return .= '
          <h1 style="margin-bottom: 20px;">'.$row->titulo.'</h1>
          <p>'.$row->texto.'</p>
          ';

      }
      return $return;
  }

  public static function showApoiador(){
    $data = new Midia();
    $data = $data->getApoiador();

    $return = '';
    foreach ($data as $row){
    
        $return .= '
        <div class="col-6">
          <div class="card" style="height: 150px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="'.$row->foto.'" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">'.$row->nome.'</h5>
                          <p class="card-text">'.$row->comentario.'</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        ';

    }
    return $return;
}

    

}






