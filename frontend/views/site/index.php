           <?php
        use yii\helpers\Html;
        use yii\helpers\ArrayHelper;
        use yii\widgets\ActiveForm;
           ?>
            <!-- banner start -->
            <!-- ================ -->
            <div class="banner banner-big-height dark-translucent-bg padding-bottom-clear" style="background-image:url('images/hotel-banner.jpg');background-position: 50% 32%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 text-center col-md-offset-2 pv-20">
                            <h1 class="title">Paket Wisata</h1>
                            <div class="separator mt-10"></div>
                            <p class="text-center">Cari dan temukan daftar pakey wisata di kota anda.</p>
                        </div>
                    </div>
                </div>
                <!-- section start -->
                <!-- ================ -->
                <div class="dark-translucent-bg section">
                    <div class="container">
                        <!-- filters start -->
                        <div class="sorting-filters text-center mb-20">
                            <?php $form = ActiveForm::begin(['id' => 'frmPwWisata','options' => ['class'=>'form-inline','role'=>'form']]); ?>
                                <?= $form->field($model, 'id_kategori')->dropDownList(ArrayHelper::map($kategori, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                                <?= $form->field($model, 'id_kota')->dropDownList(ArrayHelper::map($kota, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                                <div class="form-group">
                                    <label class="control-label">&nbsp;</label>
                                    <?= Html::submitButton('Save <i class="fa fa-check"></i>', ['class' => 'btn btn-gray-transparent btn-animated margin-clear']) ?>
                                    <div class="mt-5 mb-10"></div>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                        <!-- filters end -->
                    </div>
                </div>
                <!-- section end -->
            </div>
            <!-- banner end -->

            <!-- section start -->
            <!-- ================ -->
            <section class="light-gray-bg pv-40 border-clear">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Paket Wisata Favorit</h2>
                        <div class="separator"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="image-box style-2 mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/hotel-service-1.jpg" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <p class="lead margin-clear text-left mobile-visible">Weddings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body padding-horizontal-clear">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a class="link-dark" href="page-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box style-2 mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/hotel-service-2.jpg" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <p class="lead margin-clear text-left mobile-visible">Conferences and Meetings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body padding-horizontal-clear">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a class="link-dark" href="page-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box style-2 mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/hotel-service-3.jpg" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <p class="lead margin-clear text-left mobile-visible">Events</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body padding-horizontal-clear">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a class="link-dark" href="page-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box style-2 mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/hotel-service-4.jpg" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <p class="lead margin-clear text-left mobile-visible">Resorts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body padding-horizontal-clear">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a class="link-dark" href="page-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <section class="dark-translucent-bg background-img-9 pv-40" style="background-position: 50% 50%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                </div>
                                <h3>Just Perfect!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium.</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jane Doe</div>
                                    <div class="testimonial-info-2">By Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                </div>
                                <h3>Amazing!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione.</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jane Doe</div>
                                    <div class="testimonial-info-2">By Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-3.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                </div>
                                <h3>Amazing!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione.</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jane Doe</div>
                                    <div class="testimonial-info-2">By Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
