<?php

    require_once ('../app/scripts.php');

?>

<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <?php
            getMeta();
            getFavicon();
            getCSSCommonFiles();
            getJsCommonFiles();
        ?>
        <title><?php getAppName() ?></title>
        <link rel="stylesheet" href="../assets/css/leaflet/leaflet.min.css">
        
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="../assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page db-modern">
            <!-- Begin Header -->
            <header class="header">
                <div class="container">
                    <?php
                        require_once('../includes/navbar.php');
                    ?>
                </div>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content">
                <!-- Begin Navigation -->
                <?php
                   // require_once('../includes/menu_horizontal.php');
                ?>
                <!-- End Navigation -->
                <div class="content-inner boxed mt-4 w-100">
        
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="top: -21px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="../image/banner/imagem_1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="../image/banner/imagem_2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="../image/banner/imagem_3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>    
                        
                        <div class="container" >
                            <div class="col-xl-12" style="top: -90px;">
                                <div class="widget widget-23 bg-grey d-flex justify-content-center align-items-center" style="height: 650px; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                                    <div class="widget-body text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="container" style="text-align: center; margin-bottom: 50px;">
                            <h1 style="margin-bottom: 20px;">ÁREAS CARENTES</h1>
                            <div class="container">
                                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</h4>
                            </div>
                        </div>
                        <div id="container" style="width: 100%;height: 700px;"> 
                            
                        </div>

                       
                        
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
                        
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="../assets/vendors/js/base/jquery.min.js"></script>
        <script src="../assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="../assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="../assets/vendors/js/waypoints/waypoints.min.js"></script>
        <script src="../assets/vendors/js/chart/chart.min.js"></script>
        <script src="../assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="../assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="../assets/js/dashboard/db-modern.min.js"></script>
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