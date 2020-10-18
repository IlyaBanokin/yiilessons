<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/settings.css',
        'css/flexslider.css',
        'css/prettyPhoto.css',
        'css/font-awesome.min.css',
        'css/less-style.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.themepunch.plugins.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.prettyPhoto.js',
        'js/respond.min.js',
        'js/html5shiv.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
