<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for common css files.
 *
 */
class CommonCssAsset extends AssetBundle
{
	public $sourcePath = '@common/shared-assets';
	public $css = [
		'https://fonts.googleapis.com/css?family=Roboto:300,400,700',
		'css/bootstrap-custom.css',
		'css/nprogress.css',
	];
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
	];
	public $publishOptions = [
		'forceCopy' => YII_DEBUG,
	];
}
