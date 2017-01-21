<?php

/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

<header class="header-home">
    <div class="panel-home">
        <div class="container">
            <?php $form = ActiveForm::begin([
                'id'          => 'frmPwWisata',
                'options'     => ['role' => 'form'],
                'fieldConfig' => ['options' => ['class' => 'form-group form-group-lg has-feedback']],
            ]); ?>
                <div class="row">
                    <div class="col-md-2 col-md-offset-3 col-xs-4">
                        <?= $form
                        ->field(
                            $model,
                            'id_kategori',
                            ['template' => "{label}\n{input}\n".'<span class="fa fa-lg fa-tags form-control-feedback" aria-hidden="true"></span>'."\n{hint}\n{error}"]
                        )
                        ->dropDownList(
                            ArrayHelper::map($kategori, 'id', 'nama'),
                            ['id' => 'idKategori', 'class' => 'form-control']
                        ) ?>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <?= $form
                        ->field(
                            $model,
                            'id_kota',
                            ['template' => "{label}\n{input}\n".'<span class="fa fa-lg fa-map-marker form-control-feedback" aria-hidden="true"></span>'."\n{hint}\n{error}"]
                        )
                        ->dropDownList(
                            ArrayHelper::map($kota, 'id', 'nama'),
                            ['id' => 'idKota', 'class' => 'form-control']
                        ) ?>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <?php echo Html::label('&nbsp;') ?>
                        <?= Html::submitButton('CARI', ['class' => 'btn btn-lg btn-block btn-primary']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <div class="home-carousel">
        <?php echo Html::img('@web/images/banner/1.jpg', ['class' => 'img-responsive']) ?>
        <?php echo Html::img('@web/images/banner/2.jpg', ['class' => 'img-responsive']) ?>
        <?php echo Html::img('@web/images/banner/3.jpg', ['class' => 'img-responsive']) ?>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section-title">POPULAR <strong>DESTINATION</strong></h2>
                <div class="separator"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row section-body">
            <?php
            $images = array('sample1', 'sample2', 'sample3', 'sample4', 'sample1', 'sample2', 'sample3', 'sample4');
            ?>
            <?php foreach ($images as $row): ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="overlay-container">
                    <?php echo Html::a(Html::img('@web/images/'.$row.'.jpg', ['class' => 'img-responsive']), '@web/single') ?>
                    <div class="overlay-top">
                        <h4>Image Title Overlay</h4>
                    </div>
                    <div class="overlay-bottom">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                                <?php echo Html::a('PREVIEW', 'single', ['class' => 'btn btn-lg btn-block btn-default']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
