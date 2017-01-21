<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    $this->title = 'Pesan Paket Wisata';
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
                            <h1 class="page-title">Form Pemesanan Paket Wisata</h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <table class="table cart" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nama Paket </th>
                                        <th>Vendor </th>
                                        <th class="amount">Harga </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product"><a href="<?php echo Url::to(['detail-paket-wisata', 'id' => $DataPaket->id])?>"><?php echo $DataPaket->nama;?></a></td>
                                        <td class="price"><?php echo $DataPaket->company->nama;?></td>
                                        <td class="amount">$199.00 </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="space-bottom"></div>
                            <fieldset>
                                <legend>Billing information</legend>
                                <?php $form = ActiveForm::begin(['id' => 'billing-information','options' => ['class'=>'form-horizontal']]); ?>
                                <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="title">Personal Info</h3>
                                        </div>
                                        <div class="col-lg-8 col-lg-offset-1">
                                            <?= $form->field($model, 'nama_pemesan',['template' => '{label}<div class="col-sm-7">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]]) ?>

                                            <?= $form->field($model, 'telp1',['template' => '{label}<div class="col-sm-3">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]]) ?>

                                            <?= $form->field($model, 'telp2',['template' => '{label}<div class="col-sm-3">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]]) ?>

                                            <?= $form->field($model, 'harga')->hiddenInput(['value' => $DataPaket->harga])->label(false) ?>

                                            <?= $form->field($model, 'paket_id')->hiddenInput(['value' => $DataPaket->id])->label(false) ?>

                                            <?= $form->field($model, 'alamat_jemput',['template' => '{label}<div class="col-sm-9">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]])->textInput(['id' => 'automap']) ?>

                                            <?= $form->field($model, 'detail_jemput',['template' => '{label}<div class="col-sm-9">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]])->textArea(['rows' => '6']) ?>

                                            <?= $form->field($model, 'keterangan',['template' => '{label}<div class="col-sm-9">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]])->textArea(['rows' => '6']) ?>

                                            <?= $form->field($model, 'metode_bayar',['template' => '{label}<div class="col-sm-9">{input}{error}{hint}</div>','labelOptions' => [ 'class' => 'col-md-3 control-label' ]])->radioList(array('1'=>'BRI',2=>'Mandiri',3=>'BCA')); ?>

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


