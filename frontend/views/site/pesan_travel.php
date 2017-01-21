<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    $this->title = 'Pesan Travel';
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
                            <h1 class="page-title">Form Pemesanan Travel</h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <div class="space-bottom"></div>
                            <fieldset>
                                <legend>Billing information</legend>
                                <?php $form = ActiveForm::begin(['id' => 'billing-information','options' => ['class'=>'form-horizontal']]); ?>
                                <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="title">Personal Info</h3>
                                        </div>
                                        <div class="col-lg-8 col-lg-offset-1">
                                           
                                        </div>
                                </div>
                            </fieldset>
                            <div class="text-right">    
                                <?= Html::submitButton('Pesan', ['class' => 'btn btn-group btn-default']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>


                        </div>
                        <!-- main end -->

                    </div>
                </div>
            </section>
            <!-- main-container end -->
<?php
$this->registerJsFile('@web/js/paket_wisata.js', ['depends' => [\frontend\assets\AppAsset::className()]]);
?>


