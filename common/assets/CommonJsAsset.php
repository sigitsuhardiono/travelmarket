<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for common js files.
 *
 */
class CommonJsAsset extends AssetBundle
{
	public $sourcePath = '@common/shared-assets';
	public $js = [
		'js/nprogress.js',
	];
	public $publishOptions = [
		'forceCopy' => YII_DEBUG,
	];
}
