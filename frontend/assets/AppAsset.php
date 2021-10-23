<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animsition.min.css',
        'css/lighbox.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/plugins.js',
        'js/anime.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
