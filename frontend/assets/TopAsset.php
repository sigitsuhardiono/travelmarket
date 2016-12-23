<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TopAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'site/bootstrap/css/bootstrap.css',
        'site/fonts/font-awesome/css/font-awesome.css',
        'site/fonts/fontello/css/fontello.css',
        'site/plugins/magnific-popup/magnific-popup.css',
        'site/plugins/rs-plugin/css/settings.css',
        'site/css/animations.css',
        'site/plugins/owl-carousel/owl.carousel.css',
        'site/plugins/owl-carousel/owl.transitions.css',
        'site/plugins/hover/hover-min.css',
        'site/plugins/morphext/morphext.css',
        'site/css/style.css',
        'site/css/typography-default.css',
        'site/css/skins/gold.css',
        'site/css/custom.css',
    ];
    public $js = [
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    public $depends = [
    ];
}
