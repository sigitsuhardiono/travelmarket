<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
            <!-- banner start -->
            <!-- ================ -->
            <div class="banner banner-big-height dark-translucent-bg padding-bottom-clear" style="background-image:url('images/hotel-banner.jpg');background-position: 50% 32%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 text-center col-md-offset-2 pv-20">
                            <h1 class="title">Travel</h1>
                            <div class="separator mt-10"></div>
                            <p class="text-center">Cari dan temukan layanan travel di kota anda.</p>
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
                                <?= $form->field($model, 'id_kota_berangkat')->dropDownList(ArrayHelper::map($kota, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                                <?= $form->field($model, 'id_kota_tujuan')->dropDownList(ArrayHelper::map($kota, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                                <?= $form->field($model, 'tgl_berangkat')->TextInput(['maxlength' => 255, 'class' => 'form-control datepicker']) ?>
                                <?= $form->field($model, 'jam_berangkat',['template' => '{label}<div class="clockpicker" data-autoclose="true">{input}</div>{error}{hint}','labelOptions' => [ 'class' => 'control-label' ]]) ?>
                                <div class="form-group">
                                    <label class="control-label">&nbsp;</label>
                                    <?= Html::submitButton('Cari', ['class' => 'btn btn-gray-transparent btn-animated margin-clear']) ?>
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
                        <h2 class="text-center title">Layanan Travel Terbaru</h2>
                        <div class="separator"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

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
                                    <img src="../images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
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
<?php
$this->registerJsFile('@web/site/js/travel.js', ['depends' => [\frontend\assets\AppAsset::className()]]);
?>
