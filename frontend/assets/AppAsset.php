<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * 
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/yamm.css',
        // 'css/owl-carousel.css',
        'css/slick.css',
        'css/main.css',
        'css/search.css',
        'css/bootstrap-clockpicker.min.css',
        'css/bootstrap-datepicker3.min.css',
    ];
    public $js = [
        // 'js/modernizr.js',
        'js/bootstrap-hover-dropdown.js',
        // 'js/owl-carousel.min.js',
        'js/slick.min.js',
        'js/main.js',
        'js/jquery-clockpicker.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/bootstrap-datepicker.id.min.js',
    ];
    public $depends = [
        'common\assets\FontAwesomeAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'common\assets\CommonCssAsset',
        'common\assets\CommonJsAsset',
    ];
}
