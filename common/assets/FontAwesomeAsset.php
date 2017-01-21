<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for Font Awesome css files & friends.
 *
 */
class FontAwesomeAsset extends AssetBundle
{
	// public $sourcePath = '@vendor/fortawesome/font-awesome';
	public $css = [
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
	];

	/**
	 * Menentukan publishOptions property untuk menggabungkan nilai namespace.
	 *
	 * @return void
	 */
	public function init()
	{
		$this->publishOptions = [
			'forceCopy' => YII_DEBUG,
			'beforeCopy' => __NAMESPACE__ . '\FontAwesomeAsset::filterFolders',
		];

		parent::init();
	}

	public static function filterFolders($from, $to)
	{
		$validFilesAndFolders = [
			'css/',
			'fonts/',
			'font-awesome.css',
			'font-awesome.min.css',
			'FontAwesome.otf',
			'fontawesome-webfont.eot',
			'fontawesome-webfont.svg',
			'fontawesome-webfont.ttf',
			'fontawesome-webfont.woff',
			'fontawesome-webfont.woff2',
		];

		$pathItems = array_reverse(explode(DIRECTORY_SEPARATOR, $from));

		if (in_array($pathItems[0], $validFilesAndFolders)) return true;
		else return false;
	}

	/*Code dibawah, yang di-publish hanya foldernya saja T-T
	public $publishOptions = [
		'only' => [
			'css/',
			'fonts/',
		],
	];*/
}
