<?php
/**
 * Configuration file for the "yii asset" console command.
 */

// In the console environment, some path aliases may not exist. Please define these:
Yii::setAlias('@webroot', __DIR__ . '/../../web');
Yii::setAlias('@web', '/');

return [
    // Adjust command/callback for JavaScript files compressing:
    'jsCompressor' => 'java -jar frontend/assets/compression/compiler.jar --js {from} --js_output_file {to}',
    // Adjust command/callback for CSS files compressing:
    'cssCompressor' => 'java -jar frontend/assets/compression/yuicompressor.jar --type css {from} -o {to}',
    // Whether to delete asset source after compression:
    'deleteSource' => false,
    // The list of asset bundles to compress:
    'bundles' => [
        'frontend\assets\TestAsset',
        // 'app\assets\AppAsset',
        // 'yii\web\YiiAsset',
        // 'yii\web\JqueryAsset',
    ],
    // Asset bundle for compression output:
    'targets' => [
        'frontend\assets\AllAsset' => [
            'basePath' => '@webroot',
            'baseUrl' => '@web',
            'js' => 'js/all-{hash}.js',
            'css' => 'css/all-{hash}.css',
        ],
        /*'all' => [
            'class' => 'frontend\assets\AllAsset',
            'basePath' => '@webroot',
            'baseUrl' => '@web',
            'js' => 'js/all-{hash}.js',
            'css' => 'css/all-{hash}.css',
        ],*/
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
    ],
];