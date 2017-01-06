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
        'http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic',
        'http://fonts.googleapis.com/css?family=Raleway:700,400,300',
        'http://fonts.googleapis.com/css?family=Pacifico',
        'http://fonts.googleapis.com/css?family=PT+Serif',
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
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
