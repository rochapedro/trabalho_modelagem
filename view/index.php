<?php
    require_once ('../app/scripts.php');
    require_once ('../app/controller/Midia_Controller.php')
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <?php
            getMeta();
            getFavicon();
            getCSSCommonFiles();
            getJsCommonFiles();
        ?>
        <title><?php getAppName() ?></title>
        
    </head>
    <body>
        <div class="page db-modern">
            <header class="header">
                <div class="container">
                    <?php
                        require_once('../includes/navbar.php');
                    ?>
                </div>
            </header>
            <div class="page-content" style="margin-top: -35px;">
                <div class="content-inner boxed mt-4 w-100">
                    <section id="sobre">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="top: -21px;">
                            <div class="carousel-inner">
                                <?php
                                    echo MidiaController::showBanners();
                                ?>
                            </div>
                        </div>

                        <div class="container" style="margin-top: -80px;">
                            <div class="col-xl-12">
                                <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 650px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                    <div class="widget-body text-center">
                                        <?php
                                            echo MidiaController::showInfoSobre();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </section>
                    <section id="areas_carentes">  
                        <div class="container" style="text-align: center; margin-bottom: 50px;">
                            <h1 style="margin-bottom: 20px;">ÁREAS CARENTES</h1>
                            <div class="container">
                                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</h4>
                            </div>
                        </div>
                        <div id="container" style="width: 100%;height: 700px;"> 
                            
                        </div>
                    </section>    

                       
                    <section id="apoiadores" style="padding-top: 75px;">
                        <div class="container" style="background-color: #2c304d; height: 100px; border-radius: 5px;">
                            <div class="row" >
                                <div class="container">
                                    <div class="col-12" style="top: -30px; padding-left: 20rem; width: 60rem;">
                                        <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 50px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                            <div class="widget-body text-center">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="container">
                            <div class="row" >
                                <div class="col-4" style=" top: -30px">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 60px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-4" style=" top: -30px">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 60px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style=" top: -30px">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 60px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="">
                                    <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 300px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                        <div class="widget-body text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <section id="feedbacks">
                        <div class="container-fluid">
                            <h1 class="text-center">FEEDBACKS</h1>
                            <div class="row" >
                                <div class="col-6">
                                    <img src="../image/comentarios.jpg" class="img-fluid" style="width: 900px; height: 900px;" alt="">
                                </div>  
                                <div class="col-6">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div style="margin-top: 200px;">
                                                <div class="container" style="">
                                                    <div class="carousel-item active">
                                                        <div class="card mb-3" style="max-width: 600px; left: -4rem;">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="../image/usuario.jpg" class="card-img" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="carousel-item active">
                                                        <div class="card mb-3" style="max-width: 550px; left: 8rem;">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="../image/usuario.jpg" class="card-img" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="carousel-item active">
                                                        <div class="card mb-3" style="max-width: 600px; left: 2rem;">
                                                            <div class="row no-gutters">
                                                                <div class="col-md-4">
                                                                    <img src="../image/usuario.jpg" class="card-img" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Card title</h5>
                                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>s
                                            </div>    
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </section>
                    <section id="contato">
                        <div class="container">
                            <h1 class="text-center" style="padding-bottom: 5rem;">ENTRAR EM CONTATO</h1>
                            <div class="row" >
                                <div class="col-6">
                                    <div class="container" style="max-width: 40rem;">
                                        <form>
                                            <div class="form-group">
                                                <label for="nome">Nome</label>
                                                <input type="text" class="form-control" id="nome">
                                            </div>
                                            <div class="form-group">
                                                <label for="telefone">Telefone</label>
                                                <input type="text" class="form-control" id="telefone">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>s
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="mensagem">Mensagem</label>
                                                <textarea class="form-control" id="mensagem" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="../image/email_2.png" class="img-fluid" alt="">
                                </div> 
                            </div>
                        </div>
                    </section>    
                        
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
      
        <!-- Bootstrap core JavaScript -->
        <script src="../js/jquery/jquery.min.js"></script>
        <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../js/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom JavaScript for this theme -->
        <script src="../js/scrolling/scrolling-nav.js"></script>
    
        <!-- End Page Snippets -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/geodata/2.1.0/countries/brazil/brazil.js"></script>
  <script type="text/javascript">anychart.onDocumentReady(function() {
  // create map
  var map = anychart.map();

  // create data set
  var dataSet = anychart.data.set(
      [{"id":"BR.GO","value":0},
			{"id":"BR.SP","value":1},
			{"id":"BR.PE","value":2},
			{"id":"BR.AC","value":3},
			{"id":"BR.AM","value":4},
			{"id":"BR.MA","value":5},
			{"id":"BR.PA","value":6},
			{"id":"BR.RO","value":7},
			{"id":"BR.TO","value":8},
			{"id":"BR.DF","value":9},
			{"id":"BR.MS","value":10},
			{"id":"BR.MG","value":11},
			{"id":"BR.MT","value":12},
			{"id":"BR.RS","value":13},
			{"id":"BR.PR","value":14},
			{"id":"BR.SC","value":15},
			{"id":"BR.CE","value":16},
			{"id":"BR.PI","value":17},
			{"id":"BR.AL","value":18},
			{"id":"BR.BA","value":19},
			{"id":"BR.ES","value":20},
			{"id":"BR.PB","value":21},
			{"id":"BR.RJ","value":22},
			{"id":"BR.RN","value":23},
			{"id":"BR.SE","value":24},
			{"id":"BR.RR","value":25},
			{"id":"BR.AP","value":26}]
  );

  // create choropleth series
  series = map.choropleth(dataSet);

  // set geoIdField to 'id', this field contains in geo data meta properties
  series.geoIdField('id');

  // set map color settings
  series.colorScale(anychart.scales.linearColor('#deebf7', '#3182bd'));
  series.hovered().fill('#addd8e');

  // set geo data, you can find this map in our geo maps collection
  // https://cdn.anychart.com/#maps-collection
  map.geoData(anychart.maps['brazil']);

  //set map container id (div)
  map.container('container');

  //initiate map drawing
  map.draw();
});</script>
    </body>
</html>