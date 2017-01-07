<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    $this->title = 'Pemesanan Paket Wisata Sukses';
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
            <section class="main-container jumbotron light-gray-bg text-center margin-clear">

                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-6 col-md-offset-3 pv-40">
                            <h2 class="page-title"><span class="text-default">Pemesanan Sukses</span></h2>
                            <h2>Kode Pemesanan anda adalah <br/><?php echo Yii::$app->session->getFlash('no_order'); ?></h2>
                            <p>Terima kasih sudah melakukan pemesanan bersama kami.</p>
                            <a href="/" class="btn btn-default btn-animated btn-lg">Return Home <i class="fa fa-home"></i></a>
                        </div>
                        <!-- main end -->

                    </div>
                </div>
            </section>            <!-- main-container end -->


