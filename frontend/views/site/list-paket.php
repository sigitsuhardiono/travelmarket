<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    use yii\widgets\LinkPager;
    $this->title = 'Daftar Tempat Wisata';
    $this->params['breadcrumbs'][] = $this->title;

?>
<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('images/shop-banner.jpg'); background-position:50% 32%;">
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><?php echo $this->title;?></h2>
                <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
            </div>
        </div>
    </div>          
</div>
<!-- banner end -->

<!-- section start -->
<!-- ================ -->
<div class="light-gray-bg section">
    <div class="container">
        <!-- filters start -->
        <div class="sorting-filters text-center mb-20">
             <?php $form = ActiveForm::begin(['id' => 'frmFilterPwWisata','options' => ['class'=>'form-inline']]); ?>
                <?= $form->field($model, 'id_kategori')->dropDownList(ArrayHelper::map($kategori, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                <?= $form->field($model, 'id_kota')->dropDownList(ArrayHelper::map($kota, 'id', 'nama'), ['id' => 'idKategori', 'class' => 'form-control']) ?>
                <div class="form-group">
                    <label class="control-label">&nbsp;</label>
                    <?= Html::submitButton('Cari', ['class' => 'btn btn-default margin-clear']) ?>
                    <div class="mt-5 mb-10"></div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <!-- filters end -->
    </div>
</div>
<!-- section end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <!-- pills start -->
                <!-- ================ -->
                <!-- Tab panes -->
                <?php foreach($DataPaket as $dtpaket):?>
                        <div class="listing-item mb-20">
                            <div class="row grid-space-0">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="overlay-container">
                                        <img src="images/danau.jpg" alt="">
                                        <a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-8 col-lg-9">
                                    <div class="body">
                                        <h3 class="margin-clear"><a href="<?php echo Url::to(['detail-paket-wisata', 'id' => $dtpaket->id])?>"><?php echo $dtpaket->nama;?></a></h3>
                                        <p>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star text-default"></i>
                                            <i class="fa fa-star"></i>
                                            <a href="<?php echo Url::to(['my-wishlist', 'id' => $dtpaket->id])?>" class="btn-sm-link"><i class="icon-heart pr-5"></i>Add to Wishlist</a>
                                            <a href="<?php echo Url::to(['detail-agen', 'id' => $dtpaket->id])?>" class="btn-sm-link"><i class="icon-link pr-5"></i><?php echo $dtpaket->company->nama?></a>
                                        </p>
                                        <p><?php echo $dtpaket->deskripsi;?></p>
                                        <div class="elements-list clearfix">
                                            <span class="price">IDR <?php echo number_format($dtpaket->harga);?></span>
                                            <a href="<?php echo Url::to(['detail-paket-wisata', 'id' => $dtpaket->id])?>" class="pull-right btn btn-sm btn-default-transparent">More Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;?>
                <!-- pills end -->
                <!-- pagination start -->
                <nav class="text-center">
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                        'options' => ['class'=>'pagination','firstPageLabel'=>false],
                    ]);
                    ?>
                </nav>
                <!-- pagination end -->
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

