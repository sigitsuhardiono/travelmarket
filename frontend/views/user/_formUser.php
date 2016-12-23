<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php $form = ActiveForm::begin(['id' => 'user-form','class'=>'mt']); ?>
	<?= $form->field($model, 'id')->hiddenInput()->label(false) ?>
	<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' =>'form-control mb','placeholder'=>'Username']) ?>
	<?= $form->field($model, 'password')->passwordInput(['class'=>'form-control mb','placeholder'=>'Password']) ?>
	<?= $form->field($model, 'status')->hiddenInput()->label(false) ?>
	<?= $form->field($model, 'role')->hiddenInput()->label(false) ?>
<?php ActiveForm::end(); ?>