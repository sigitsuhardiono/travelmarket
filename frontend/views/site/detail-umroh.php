<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    $this->title = 'Detail Paket Wisata';
    $this->params['breadcrumbs'][] = $this->title;
?>
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
                        <li class="active"><?php echo $this->title;?></li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->

            <!-- main-container start -->
            <!-- ================ -->
            <section class="main-container">

                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12">

                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title"><?php echo $DataPaket->nama;?></h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- pills start -->
                                    <!-- ================ -->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
                                        <li><a href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content clear-style">
                                        <div class="tab-pane active" id="pill-1">
                                            <div class="owl-carousel content-slider-with-large-controls">
                                                <div class="overlay-container overlay-visible">
                                                    <img src="../images/product-1.jpg" alt="">
                                                    <a href="../images/product-1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                                                </div>
                                                <div class="overlay-container overlay-visible">
                                                    <img src="../images/product-1-2.jpg" alt="">
                                                    <a href="../images/product-1-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pill-2">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
                                                <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com/">Vimeo</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pills end -->
                                </div>
                                <div class="col-md-8 pv-30">
                                    <h2>Deskripsi</h2>
                                    <?php echo $DataPaket->deskripsi;?>
                                    <hr class="mb-10">
                                    <div class="clearfix mb-20">
                                        <span>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <a href="<?php echo Url::to(['my-wishlist', 'id' => $DataPaket->id])?>" class="wishlist"><i class="fa fa-heart-o pl-10 pr-5"></i>Wishlist</a>
                                        <ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="light-gray-bg p-20 bordered clearfix">
                                        <span class="product price"><i class="icon-tag pr-10"></i>IDR <?php echo number_format($DataPaket->harga);?></span>
                                        <div class="product elements-list pull-right clearfix">
                                            <a href="<?php echo Url::to(['pesan-paket-umroh', 'id' => $DataPaket->id])?>" class="margin-clear btn btn-default">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main end -->

                    </div>
                </div>
            </section>
            <!-- main-container end -->

            <!-- section start -->
            <!-- ================ -->
            <section class="pv-30 light-gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs style-4" role="tablist">
                                <li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li>
                                <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content padding-top-clear padding-bottom-clear">
                                <div class="tab-pane fade in active" id="h2tab2">
                                    <h4 class="space-top">Specifications</h4>
                                    <hr>
                                    <dl class="dl-horizontal">
                                        <dt>Consectetur</dt>
                                        <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
                                        <dt>Culla</dt>
                                        <dd>Adipisci autem illo hic itaque nulla velit quod laboriosam ipsum in illum!</dd>
                                        <dt>Quas</dt>
                                        <dd>Velit mollitia vel nemo, repudiandae quas nisi consectetur maiores beatae.</dd>
                                        <dt>Sapiente</dt>
                                        <dd>Dolor, architecto, accusamus. Explicabo, culpa hic sapiente amet libero, recusandae laudantium consequatur velit possimus ratione quo. Ipsum maxime officia quasi quos magni!</dd>
                                        <dt>Dignissimos</dt>
                                        <dd>Odio cum deleniti mollitia, quisquam dignissimos voluptatem, unde rem alias.</dd>
                                        <dt>Adipisicing</dt>
                                        <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
                                        <dd>Tempora rerum veritatis nam blanditiis.</dd>
                                        <dt>Werspiciatis</dt>
                                        <dd>Rem nostrum sit magnam debitis quidem perspiciatis fuga fugit.</dd>
                                    </dl>
                                    <hr>
                                </div>
                                <div class="tab-pane fade" id="h2tab3">
                                    <!-- comments start -->
                                    <div class="comments margin-clear space-top">
                                        <!-- comment start -->
                                        <div class="comment clearfix">
                                            <div class="comment-avatar">
                                                <img class="img-circle" src="../images/avatar.jpg" alt="avatar">
                                            </div>
                                            <header>
                                                <h3>Amazing!</h3>
                                                <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
                                            </header>
                                            <div class="comment-content">
                                                <div class="comment-body clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                                    <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- comment end -->

                                        <!-- comment start -->
                                        <div class="comment clearfix">
                                            <div class="comment-avatar">
                                                <img class="img-circle" src="../images/avatar.jpg" alt="avatar">
                                            </div>
                                            <header>
                                                <h3>Really Nice!</h3>
                                                <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
                                            </header>
                                            <div class="comment-content">
                                                <div class="comment-body clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                                    <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- comment end -->

                                        <!-- comment start -->
                                        <div class="comment clearfix">
                                            <div class="comment-avatar">
                                                <img class="img-circle" src="../images/avatar.jpg" alt="avatar">
                                            </div>
                                            <header>
                                                <h3>Worth to Buy!</h3>
                                                <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
                                            </header>
                                            <div class="comment-content">
                                                <div class="comment-body clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                                    <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- comment end -->
                                    </div>
                                    <!-- comments end -->

                                    <!-- comments form start -->
                                    <div class="comments-form">
                                        <h2 class="title">Add your Review</h2>
                                        <form role="form" id="comment-form">
                                            <div class="form-group has-feedback">
                                                <label for="name4">Name</label>
                                                <input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="subject4">Subject</label>
                                                <input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
                                                <i class="fa fa-pencil form-control-feedback"></i>
                                            </div>
                                            <div class="form-group">
                                                <label>Rating</label>
                                                <select class="form-control" id="review">
                                                    <option value="five">5</option>
                                                    <option value="four">4</option>
                                                    <option value="three">3</option>
                                                    <option value="two">2</option>
                                                    <option value="one">1</option>
                                                </select>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="message4">Message</label>
                                                <textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
                                                <i class="fa fa-envelope-o form-control-feedback"></i>
                                            </div>
                                            <input type="submit" value="Submit" class="btn btn-default">
                                        </form>
                                    </div>
                                    <!-- comments form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->