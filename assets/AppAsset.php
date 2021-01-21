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
        //'css/owl.carousel.min.css',
        //'css/owl.theme.default.css',
        //'css/sliders.css',
        //'css/site.css',
        'css/reset.css',
        'css/style.css?4',
        'css/hamburgers.css',
        'css/hover-click.css',
        'css/menu-mobile.css',
        'css/main-vertical.css',
        //'css/icons.css', иконки
        'css/index.css',
        'css/blog.css',
        'css/proba.css',
    ];
    public $js = [
        //'js/owl.carousel.min.js',
        /*
        jquery.cookie.js и jquery.dcjqaccordion.2.7.js нужны для раскрывающихся категорий в мобильном меню
        */
        'js/jquery.cookie.js',
        'js/jquery.dcjqaccordion.2.7.js',
        'js/scripts.js',
        'js/hover-click.js',
        'js/proba.js?1',
    ];
    public $depends = [
        //'app\assets\FontAwesomeAsset',
        'yii\web\YiiAsset',
        // подключаем jQuery UI
        //'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //еще дополнительно подключаем bootstrap.js
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
