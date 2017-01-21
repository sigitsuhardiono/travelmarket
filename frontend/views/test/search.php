<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = 'Paket wisata';
?>

<div class="container">
	<div class="page-heading">
		<h2>Search item heading</h2>
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="flat-panel sidenav">
				<div class="flat-title">
					<h4><a class="close visible-xs visible-sm"><i class="fa fa-close"></i></a>Search form</h4>
				</div>

				<?php $form = ActiveForm::begin([
					'id'      => 'frmFilterPwWisata',
					'options' => ['class' => 'form-inline']
				]) ?>
					<?= $form
					->field($model, 'id_kategori')
					->dropDownList(
						ArrayHelper::map($kategori, 'id', 'nama'),
						['id' => 'idKategori', 'class' => 'form-control']
					) ?>
					<?= $form
					->field($model, 'id_kota')
					->dropDownList(
						ArrayHelper::map($kota, 'id', 'nama'),
						['id' => 'idKategori', 'class' => 'form-control']
					) ?>
					<div class="form-group">
						<label class="control-label">&nbsp;</label>
						<?= Html::submitButton('Cari', ['class' => 'btn btn-default margin-clear']) ?>
						<div class="mt-5 mb-10"></div>
					</div>
				<?php ActiveForm::end(); ?>

				<?php for ($a = 0; $a < 3; $a++): ?>
				<div class="form-group has-feedback">
					<?php echo Html::label('Form '.($a+1), 'field'.($a+1)) ?>
					<?php echo Html::input('text', 'field'.($a+1), '', ['id' => 'field'.($a+1), 'class' => 'form-control', 'placeholder' => 'Form '.($a+1)]) ?>
					<span class="fa fa-pencil form-control-feedback" aria-hidden="true"></span>
				</div>
				<?php endfor ?>
			</div>

			<div class="hidden-xs hidden-sm">
				<h3>Ads</h3>
				<div class="separator left"></div>

				<?php for ($a = 0; $a < 4; $a++): ?>
				<div style="margin:15px 0">
					<?php echo Html::img('@web/images/sample'.($a+1).'.jpg', ['class' => 'img-responsive']) ?>
				</div>
				<?php endfor; ?>
			</div>
		</div>

		<div class="col-md-9">
			<div class="flat-panel">
				<div class="flat-title">
					<h4>Search result</h4>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-8">
						<!-- <div class="form-horizontal"> -->
							<div class="form-group">
								<?php // echo Html::label('Sort by', 'sort', ['class' => 'control-label col-sm-4']) ?>
								<!-- <div class="col-sm-8"> -->
									<?php echo Html::dropDownList('sort', null, ['Paket termurah', 'Paket termahal'], ['class' => 'form-control']) ?>
								<!-- </div> -->
							</div>
						<!-- </div> -->
					</div>
				</div>

                <?php foreach ($DataPaket as $dtpaket): ?>
				<div class="search-item media">
					<div class="media-left media-middle">
						<?php echo Html::img('@web/images/default-96.png', ['class' => 'media-object']) ?>
					</div>
					<div class="media-body">
						<div class="row">
							<div class="col-lg-9 col-sm-8">
								<h4 class="media-heading"><?php echo Html::a($dtpaket->nama, Url::to(['detail-paket-wisata', 'id' => $dtpaket->id])) ?></h4>
								<div class="rating">
									<?php $rate = mt_rand(1, 5) ?>
									<?php for ($b = 0; $b < 5; $b++): ?>
									<i class="fa fa-star <?php echo $b < $rate ? 'text-warning' : '' ?>"></i>
									<?php endfor ?>
								</div>
								<p><?php echo Html::a($dtpaket->company->nama, Url::to(['detail-agen', 'id' => $dtpaket->id])) ?></p>
								<h4>Junks</h4>
								<p><?php echo $dtpaket->deskripsi ?></p>
								<p><?php echo Html::a('<i class="fa fa-fw fa-bookmark-o"></i> Add to wishlist', Url::to(['my-wishlist', 'id' => $dtpaket->id])) ?></p>
							</div>
							<div class="col-lg-3 col-sm-4">
								<div class="row deal">
									<div class="col-sm-12 col-xs-7">
										<div class="price">Rp <span class="value"><?php echo number_format($dtpaket->harga) ?></span></div>
									</div>
									<div class="col-sm-12 col-xs-5">
										<?php echo Html::a('DETAIL &nbsp;<i class="fa fa-angle-double-right"></i>', Url::to(['detail-paket-wisata', 'id' => $dtpaket->id]), ['class' => 'btn btn-block btn-warning']) ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>

			<?php echo LinkPager::widget([
				'pagination' => $pages,
				'options'    => ['class' => 'pagination', 'firstPageLabel' => false]
			]) ?>
		</div>
	</div>

	<div id="view-filter" class="floating-container bottom left visible-sm visible-xs">
		<a class="btn btn-circle btn-warning"><i class="fa fa-lg fa-fw fa-search"></i></a>
	</div>

	<div id="go-top" class="floating-container bottom right">
		<a class="btn btn-circle btn-primary"><i class="fa fa-lg fa-fw fa-long-arrow-up"></i></a>
	</div>
</div>