<?php

/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Single page';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
	<div class="page-heading">
		<h2>
			<?php echo $DataPaket->nama ?>
			<small><?php echo Html::a('<i class="fa fa-fw fa-heart"></i>', Url::to(['my-wishlist', 'id' => $DataPaket->id])) ?></small>
		</h2>
	</div>

	<div class="flat-panel">
		<div class="row">
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
						<div class="preview">
							<div class="preview-image">
								<?php for ($a = 0; $a < 10; $a++): ?>
								<?php $number[] = mt_rand(1, 4) ?>
								<?php echo Html::img('@web/images/sample'.$number[$a].'.jpg', ['class' => 'img-responsive']) ?>
								<?php endfor ?>
							</div>
							<div class="preview-thumbnail">
								<?php for ($a = 0; $a < 10; $a++): ?>
								<?php echo Html::img('@web/images/sample'.$number[$a].'.jpg', ['class' => 'img-responsive']) ?>
								<?php endfor ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="rating">
					<?php $rate = mt_rand(1, 5) ?>
					<?php for ($b = 0; $b < 5; $b++): ?>
					<i class="fa fa-star <?php echo $b < $rate ? 'text-warning' : '' ?>"></i>
					<?php endfor ?>
				</div>
				<p>Single item vendor</p>

				<p><?php echo $DataPaket->deskripsi ?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed enim nulla, euismod nec vehicula in, iaculis vitae diam. Nulla lacinia, est non feugiat eleifend, lorem felis fringilla tellus, eu consectetur ante orci et eros. Nullam feugiat tempus elit id bibendum. Duis pellentesque vestibulum quam a elementum. Etiam id dolor euismod, fermentum purus ac, ornare dolor. Morbi ac quam quis ante porta luctus nec eu lectus. Ut sit amet dolor aliquet, commodo libero eget, ornare nulla. Proin quis lobortis ex.</p>

				<div class="price"><?php echo number_format($DataPaket->harga) ?></div>

				<div class="row">
					<div class="col-md-4 col-md-offset-8 col-xs-6 col-xs-offset-6">
						<?php echo Html::a('PESAN', Url::to(['pesan-paket-wisata', 'id' => $DataPaket->id]), ['class' => 'btn btn-lg btn-block btn-warning']) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>