<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class GlobalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        // 'site/plugins/jquery.min.js',
        'site/bootstrap/js/bootstrap.min.js',
        'site/plugins/modernizr.js',
        'site/plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
        'site/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'site/plugins/isotope/isotope.pkgd.min.js',
        'site/plugins/magnific-popup/jquery.magnific-popup.min.js',
        'site/plugins/waypoints/jquery.waypoints.min.js',
        'site/plugins/jquery.countTo.js',
        'site/plugins/jquery.parallax-1.1.3.js',
        'site/plugins/jquery.validate.js',
        'site/plugins/morphext/morphext.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBRvPgWdEwR99-u5GeSxvkwXcPnZxxwqXY&v=3&libraries=places&region=id',
        'site/js/google.map.config.js',
        'site/plugins/vide/jquery.vide.js',
        'site/plugins/owl-carousel/owl.carousel.js',
        'site/plugins/pace/pace.min.js',
        'site/plugins/jquery.browser.js',
        'site/plugins/SmoothScroll.js',
        'site/js/template.js',
        'site/js/bootstrap-datepicker.min.js',
        'site/js/bootstrap-datepicker.id.min.js',
        'site/js/jquery-clockpicker.min.js',
        'site/js/custom.js',
    ];
    public $depends = [
        'frontend\assets\TopAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );
}
