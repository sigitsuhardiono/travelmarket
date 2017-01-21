<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

$this->title = 'Single page 3';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
	<div class="single">
		<div class="media single-title">
			<div class="media-left">
				<?php echo Html::img('@web/images/default-64.png', ['class' => 'media-object']) ?>
			</div>
			<div class="media-body">
				<h4 class="media-heading">Single item title 3</h4>
				<p>Single item vendor</p>
			</div>
			<div class="media-right">
				<?php echo Html::button('PESAN', ['class' => 'btn btn-lg btn-warning']) ?>
			</div>
		</div>
		<div class="separator left"></div>

		<div class="form-horizontal">
			<div class="row">
				<div class="col-md-9">
					<div class="single-body">
						<legend>Legend</legend>
						<div class="row">
							<?php $no = 1; ?>
							<?php for ($a = 0; $a < 2; $a++): ?>
							<div class="col-md-6">
								<?php for ($b = 0; $b < 3; $b++): ?>
								<div class="form-group">
									<?php echo Html::label('Form '.$no, 'form'.$no, ['class' => 'control-label col-sm-3']) ?>
									<div class="col-sm-9">
										<?php echo Html::input('text', 'form'.$no, '', ['class' => 'form-control']) ?>
									</div>
								</div>
								<?php $no++ ?>
								<?php endfor ?>
							</div>
							<?php endfor ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-right">
					<?php $value = mt_rand(1, 10) ?>
					<div class="price">Rp <span class="value"><?php echo $value ?>,000,000</span></div>
					<small>* Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
				</div>
			</div>
		</div>
	</div>
</div>
