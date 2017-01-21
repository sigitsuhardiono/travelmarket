<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

<header class="header-home">
	<div class="panel-home">
		<div class="container">
			<form method="get" action="<?php echo Yii::$app->homeUrl ?>/test/search">
				<div class="row">
					<?php for ($a = 0; $a < 3; $a++): ?>
					<div class="col-xs-3">
						<div class="form-group form-group-lg has-feedback">
							<?php echo Html::label('Form '.($a+1), 'field'.($a+1)) ?>
							<?php echo Html::input('text', 'field'.($a+1), '', ['id' => 'field'.($a+1), 'class' => 'form-control', 'placeholder' => 'Form '.($a+1)]) ?>
							<span class="fa fa-lg fa-pencil form-control-feedback" aria-hidden="true"></span>
						</div>
					</div>
					<?php endfor ?>
					<div class="col-xs-3">
						<div class="form-group">
							<?php echo Html::label('&nbsp;') ?>
							<?php echo Html::submitButton('<i class="fa fa-fw fa-search"></i> FIND', ['class' => 'btn btn-lg btn-block btn-primary']) ?>
						</div>
					</div>
				</div>
			</form>
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
