<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-lg fa-fw fa-bars"></i>
				<!-- <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> -->
			</button>
			<a class="navbar-brand" href="<?php echo Yii::$app->homeUrl ?>"><i class="fa fa-fw fa-map-marker"></i> TRAVELMARKET</a>
		</div>

		<div id="navbar-collapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Dead link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single page <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo Html::a('Search page', '@web/test/search') ?></li>
						<li><?php echo Html::a('Single page 1', '@web/single') ?></li>
						<li><?php echo Html::a('Single page 2', '@web/single/index2') ?></li>
						<li class="divider" role="separator"></li>
						<li><a href="#">Dead link</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="nav-pack">
	<div class="container">
		<?php // echo Html::a(Html::img('@web/images/transuperindo-white.png'), Yii::$app->homeUrl, ['class' => 'navbar-brand big']) ?>
		<?php // echo Html::a(Html::img('@web/images/transuperindo-logo.png'), Yii::$app->homeUrl, ['class' => 'navbar-brand small']) ?>
		<?php echo Html::a('<i class="fa fa-lg fa-fw fa-map-marker"></i> <b>TRAVELMARKET</b>', Yii::$app->homeUrl, ['class' => 'navbar-brand big']) ?>
		<?php echo Html::a('<i class="fa fa-lg fa-fw fa-map-marker"></i>', Yii::$app->homeUrl, ['class' => 'navbar-brand small']) ?>
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Paket wisata</a></li>
			<li><a href="#">Travel shuttle</a></li>
			<li><a href="#">Rental mobil</a></li>
		</ul>
	</div>
</div>
<div class="nav-pack-clear"></div>
