<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

$this->title = 'Single item heading 2';
?>

<div class="container">
	<div class="page-heading media">
		<div class="media-left">
			<?php echo Html::img('@web/images/default-64.png', ['class' => 'media-object']) ?>
		</div>
		<div class="media-body">
			<h4 class="media-heading">Single item heading 2</h4>
			<p>Single item vendor</p>
		</div>
		<div class="media-right media-middle">
			<?php echo Html::button('PESAN', ['class' => 'btn btn-lg btn-warning']) ?>
		</div>
	</div>

	<div class="form-horizontal">
		<div class="row">
			<div class="col-md-9">
				<div class="flat-panel">
					<div class="flat-title">
						<h4>Single item body title 2</h4>
					</div>

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