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
                    require_once('../includes/menu_horizontal.php');
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
                        
                        <div class="col-xl-6">
                                <!-- Basic Layers Control -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Layers Control</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div id="layer-control" style="height: 400px;"></div>
                                    </div>
                                </div>
                                <!-- End Basic Layers Control -->
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
        <script>
            var mapboxAccessToken = {};
var map = L.map('map').setView([37.8, -96], 4);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
    id: 'mapbox/light-v9',
    attribution: ,
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);

L.geoJson(statesData).addTo(map);
        </script>
    </body>
</html>