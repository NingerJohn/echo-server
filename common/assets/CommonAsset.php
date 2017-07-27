<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class CommonAsset extends AssetBundle
{
    public $sourcePath = '@common/assets';
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
    ];
    public $js = [
        'tabex/tabex.js',
        'vue/vue.js',
        'jquery/jquery-1.11.3.min.js',
    ];
    public $jsOptions = [
        'position'=>View::POS_HEAD,
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
