<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<footer>
	<div class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="form-group has-feedback">
						<?php echo Html::label('Subscribe to get more of us!', 'subscribe') ?>
						<div class="input-group">
							<?php echo Html::input('text', 'subscribe', '', ['id' => 'subscribe','class' => 'form-control', 'placeholder' => 'Masukkan email Anda']) ?>
							<span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span>
							<div class="input-group-btn">
								<?php echo Html::button('SUBSCRIBE', ['class' => 'btn btn-primary']) ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php for ($a = 0; $a < 3; $a++): ?>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<ul class="quick-links">
					<li><?php echo Html::a('Some link 1', '#') ?></li>
					<li><?php echo Html::a('Some link 2', '#') ?></li>
					<li><?php echo Html::a('Some link 3', '#') ?></li>
					<li><?php echo Html::a('Some link 4', '#') ?></li>
					<li><?php echo Html::a('Some link 5', '#') ?></li>
				</ul>
			</div>
			<?php endfor; ?>

			<div class="col-md-offset-3 col-sm-3 text-center hidden-xs">
				<span class="fa-stack fa-5x text-primary">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-map-marker fa-inverse fa-stack-1x"></i>
				</span>
			</div>
		</div>
		<p>&copy; 2016&mdash;<?php echo date('Y') ?> TravelMarket.com. All rights reserved.</p>

		<div class="separator"></div>
		<p class="text-center">TravelMarket.com is supported by Transuperindo.</p>
	</div>
</footer>