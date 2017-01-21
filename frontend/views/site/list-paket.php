<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = 'Paket wisata';
?>

<div class="container">
    <div class="page-heading">
        <h2>Search item heading</h2>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="flat-panel sidenav">
                <div class="flat-title">
                    <h4><a class="close visible-xs visible-sm"><i class="fa fa-close"></i></a>Search form</h4>
                </div>

                <?php $form = ActiveForm::begin([
                    'id'          => 'frmFilterPwWisata',
                    'options'     => ['role' => 'form'],
                    'fieldConfig' => ['options' => ['class' => 'form-group has-feedback']],
                ]) ?>
                    <?= $form
                    ->field(
                        $model,
                        'id_kategori',
                        ['template' => "{label}\n{input}\n".'<span class="fa fa-tags form-control-feedback" aria-hidden="true"></span>'."\n{hint}\n{error}"]
                    )
                    ->dropDownList(
                        ArrayHelper::map($kategori, 'id', 'nama'),
                        ['id' => 'idKategori', 'class' => 'form-control']
                    ) ?>
                    <?= $form
                    ->field(
                        $model,
                        'id_kota',
                        ['template' => "{label}\n{input}\n".'<span class="fa fa-map-marker form-control-feedback" aria-hidden="true"></span>'."\n{hint}\n{error}"]
                    )
                    ->dropDownList(
                        ArrayHelper::map($kota, 'id', 'nama'),
                        ['id' => 'idKota', 'class' => 'form-control']
                    ) ?>

                    <?= Html::submitButton('CARI', ['class' => 'btn btn-block btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>

            <div class="hidden-xs hidden-sm">
                <h3>Ads</h3>
                <div class="separator left"></div>

                <?php for ($a = 0; $a < 4; $a++): ?>
                <div style="margin:15px 0">
                    <?php echo Html::img('@web/images/sample'.($a+1).'.jpg', ['class' => 'img-responsive']) ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="col-md-9">
            <div class="flat-panel">
                <div class="flat-title">
                    <h4>Search result</h4>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <!-- <div class="form-horizontal"> -->
                            <div class="form-group">
                                <?php // echo Html::label('Sort by', 'sort', ['class' => 'control-label col-sm-4']) ?>
                                <!-- <div class="col-sm-8"> -->
                                    <?php echo Html::dropDownList('sort', null, ['Paket termurah', 'Paket termahal'], ['class' => 'form-control']) ?>
                                <!-- </div> -->
                            </div>
                        <!-- </div> -->
                    </div>
                </div>

                <?php foreach ($DataPaket as $dtpaket): ?>
                <div class="search-item media">
                    <div class="media-left">
                        <?php echo Html::img('@web/images/default-96.png', ['class' => 'media-object']) ?>
                    </div>
                    <div class="media-body">
                        <div class="row">
                            <div class="col-lg-9 col-sm-8">
                                <h4 class="media-heading">
                                    <?php echo Html::a($dtpaket->nama, Url::to(['detail-paket-wisata', 'id' => $dtpaket->id])) ?>
                                    <small><?php echo Html::a('<i class="fa fa-fw fa-heart"></i>', Url::to(['my-wishlist', 'id' => $dtpaket->id])) ?></small>
                                </h4>
                                <div class="rating">
                                    <?php $rate = mt_rand(1, 5) ?>
                                    <?php for ($b = 0; $b < 5; $b++): ?>
                                    <i class="fa fa-star <?php echo $b < $rate ? 'text-warning' : '' ?>"></i>
                                    <?php endfor ?>
                                </div>
                                <p><?php echo Html::a($dtpaket->company->nama, Url::to(['detail-agen', 'id' => $dtpaket->id])) ?></p>
                                <!-- <p><?php echo $dtpaket->deskripsi ?></p> -->
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="row deal">
                                    <div class="col-sm-12 col-xs-7">
                                        <div class="price">Rp <span class="value"><?php echo number_format($dtpaket->harga) ?></span></div>
                                    </div>
                                    <div class="col-sm-12 col-xs-5">
                                        <?php echo Html::a('DETAIL &nbsp;<i class="fa fa-angle-double-right"></i>', Url::to(['detail-paket-wisata', 'id' => $dtpaket->id]), ['class' => 'btn btn-block btn-warning']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <div class="text-center">
                <?php echo LinkPager::widget([
                    'pagination' => $pages,
                    'options'    => ['class' => 'pagination', 'firstPageLabel' => false]
                ]) ?>
            </div>
        </div>
    </div>

    <div id="view-filter" class="floating-container bottom left visible-sm visible-xs">
        <a class="btn btn-circle btn-warning"><i class="fa fa-lg fa-fw fa-search"></i></a>
    </div>

    <div id="go-top" class="floating-container bottom right">
        <a class="btn btn-circle btn-primary"><i class="fa fa-lg fa-fw fa-long-arrow-up"></i></a>
    </div>
</div>

<?php /* ?>
<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('../images/shop-banner.jpg'); background-position:50% 32%;">
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
                                        <img src="../images/danau.jpg" alt="">
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
<?php */ ?>
