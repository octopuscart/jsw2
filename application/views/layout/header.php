<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <?php
        meta_tags();
        ?>

        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/themestyle.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/navigation.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl/assets/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl/assets/owl.theme.default.min.css" type="text/css" />

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.css">

        <script src="<?php echo base_url(); ?>assets/theme2/angular/angular.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>


        <style>

            .revo-slider-emphasis-text {
                font-size: 58px;
                font-weight: 700;
                letter-spacing: 1px;
                font-family: 'Raleway', sans-serif;
                padding: 15px 20px;
                border-top: 2px solid #FFF;
                border-bottom: 2px solid #FFF;
            }

            .revo-slider-desc-text {
                font-size: 20px;
                font-family: 'Lato', sans-serif;
                width: 650px;
                text-align: center;
                line-height: 1.5;
            }

            .revo-slider-caps-text {
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 3px;
                font-family: 'Raleway', sans-serif;
            }

            .tp-video-play-button { display: none !important; }

            .tp-caption { white-space: nowrap; }

        </style>

    </head>

    <body class="stretched" ng-app="App" ng-controller="ShopController" id="ShopController">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix ">

            <!-- Top Bar
            ============================================= -->
            <div id="top-bar" class="d-none d-md-block bluegradiant ">

                <div class="container clearfix ">

                    <div class="col_half nobottommargin">

                        <p class="nobottommargin"><strong>Tel :</strong>&nbsp; +(852) 2368 7651 <span class='blankspace'>|</span> <strong>Email:</strong>&nbsp; navrang@netvigator.com</p>

                    </div>

                    <div class="col_half col_last fright nobottommargin">

                        <!-- Top Links
                        ============================================= -->
                        <div class="">
                            <p class="nobottommargin"><a href="" style="color:white">Account</a> <span class='blankspace'>|</span> <a href="" style="color:white">Registration</a></p>

                        </div><!-- .top-links end -->

                    </div>

                </div>

            </div><!-- #top-bar end -->

            <!-- Header
            ============================================= -->
            <header id="header">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="<?php echo site_url("/"); ?>" class="standard-logo desktoplogo" data-dark-logo="<?php echo base_url(); ?>assets/images/logo.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="JSW Logo" style='height: 100px'></a>
                            <a href="<?php echo site_url("/"); ?>" class="retina-logo mobilelogo" data-dark-logo="<?php echo base_url(); ?>assets/images/logo.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <?php
                        $this->load->view('layout/menu');
                        ?>

                    </div>

                </div>

            </header><!-- #header end -->

            <script>


                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo site_url(); ?>";
                var imageurlg = "<?php echo PRODUCTIMAGELINK; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;
            </script> 






