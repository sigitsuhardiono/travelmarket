<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\GlobalAsset;
use common\widgets\Alert;

GlobalAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
        <meta name="author" content="htmlcoder.html">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../images/favicon.ico">

        <?php $this->head(); ?>
</head>

    <!-- body classes:  -->
    <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
    <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
    <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
    <!-- "gradient-background-header": applies gradient background to header -->
    <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page   page-loader-2">
    <?php $this->beginBody() ?>
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
        
            <!-- header-container start -->
            <div class="header-container">
                
                <!-- header-top start -->
                <!-- classes:  -->
                <!-- "dark": dark version of header top e.g. class="header-top dark" -->
                <!-- "colored": colored version of header top e.g. class="header-top colored" -->
                <!-- ================ -->
                <div class="header-top dark ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2 col-sm-5">
                                <!-- header-top-first start -->
                                <!-- ================ -->
                                <div class="header-top-first clearfix">
                                    <ul class="social-links circle small clearfix hidden-xs">
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.skype.com/"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a target="_blank" href="http://www.flickr.com/"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                            <ul class="dropdown-menu dropdown-animation">
                                                <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                                <li class="skype"><a target="_blank" href="http://www.skype.com/"><i class="fa fa-skype"></i></a></li>
                                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="youtube"><a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                                                <li class="flickr"><a target="_blank" href="http://www.flickr.com/"><i class="fa fa-flickr"></i></a></li>
                                                <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- header-top-first end -->
                            </div>
                            <div class="col-xs-10 col-sm-7">

                                <!-- header-top-second start -->
                                <!-- ================ -->
                                <div id="header-top-second"  class="clearfix text-right">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
                                        <li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
                                    </ul>
                                </div>
                                <!-- header-top-second end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top end -->
                
                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ --> 
                <header class="header  fixed    clearfix">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 ">
                                <!-- header-left start -->
                                <!-- ================ -->
                                <div class="header-left clearfix">

                                    <!-- logo -->
                                    <div id="logo" class="logo">
                                        <a href="/"><img id="logo_img" src="../images/logo_gold.png" alt="The Project"></a>
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        Multipurpose HTML5 Template
                                    </div>
                                    
                                </div>
                                <!-- header-left end -->

                            </div>
                            <div class="col-md-9">
                    
                                <!-- header-right start -->
                                <!-- ================ -->
                                <div class="header-right clearfix">
                                    
                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                <!-- ================ -->
                                <div class="main-navigation  animated with-dropdown-buttons">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu -->
                                                <ul class="nav navbar-nav ">

                                                    <!-- mega-menu start -->
                                                    <li><a href="/paket-wisata">Paket Wisata</a></li>
                                                    <li> <a href="/umroh">Umroh</a></li>
                                                    <li> <a href="travel">Travel</a></li>
                                                    <li> <a href="drop">Drop</a></li>
                                                    <li> <a href="rental">Rental</a></li>
                                                </ul>
                                                <!-- main-menu end -->
                                                
                                                <!-- header buttons -->
                                                <div class="header-dropdown-buttons">
                                                    <a href="mailto:theproject@info.com" class="btn btn-sm hidden-xs btn-default">Contact Us <i class="fa fa-envelope-o pl-5"></i></a>
                                                    <a href="mailto:theproject@info.com" class="btn btn-lg visible-xs btn-block btn-default">Contact Us <i class="fa fa-envelope-o pl-5"></i></a>
                                                </div>
                                                <!-- header buttons end-->
                                                
                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->
                                </div>
                                <!-- header-right end -->
                    
                            </div>
                        </div>
                    </div>
                    
                </header>
                <!-- header end -->
            </div>
            <!-- header-container end -->
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <?= $content ?>
            <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
            <!-- ================ -->
            <footer id="footer" class="clearfix ">

                <!-- .footer start -->
                <!-- ================ -->
                <div class="footer">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="footer-content">
                                        <div class="logo-footer"><img id="logo-footer" src="../images/logo_gold.png" alt=""></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore fugit vitae quia dicta inventore reiciendis. Ipsa, aut voluptas quaerat.</p>
                                                <ul class="social-links circle animated-effect-1">
                                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                                    <li class="xing"><a target="_blank" href="http://www.xing.com/"><i class="fa fa-xing"></i></a></li>
                                                    <li class="skype"><a target="_blank" href="http://www.skype.com/"><i class="fa fa-skype"></i></a></li>
                                                    <li class="youtube"><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                                </ul>
                                                <ul class="list-icons">
                                                    <li><i class="fa fa-map-marker pr-10 text-default"></i> One infinity loop, 54100</li>
                                                    <li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
                                                    <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@theproject.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="map-canvas"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-content">
                                        <h2 class="title">Contact Us</h2>
                                        <br>
                                        <div class="alert alert-success hidden" id="MessageSent2">
                                            We have received your message, we will contact you very soon.
                                        </div>
                                        <div class="alert alert-danger hidden" id="MessageNotSent2">
                                            Oops! Something went wrong please refresh the page and try again.
                                        </div>
                                        <form role="form" id="footer-form" class="margin-clear">
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="name2">Name</label>
                                                <input type="text" class="form-control" id="name2" placeholder="Name" name="name2">
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="email2">Email address</label>
                                                <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
                                                <i class="fa fa-envelope form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="sr-only" for="message2">Message</label>
                                                <textarea class="form-control" rows="6" id="message2" placeholder="Message" name="message2"></textarea>
                                                <i class="fa fa-pencil form-control-feedback"></i>
                                            </div>
                                            <input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .footer end -->

                <!-- .subfooter start -->
                <!-- ================ -->
                <div class="subfooter">
                    <div class="container">
                        <div class="subfooter-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">Copyright © 2016 The Project by <a target="_blank" href="http://htmlcoder.me/">HtmlCoder</a>. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .subfooter end -->

            </footer>
            <!-- footer end -->
            
        </div>
        <!-- page-wrapper end -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
