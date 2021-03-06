<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'js/katex/katex.min.css',
        'js/highlight/styles/monokai-sublime.css',
    ];
    public $js = [
        'js/highlight/highlight.pack.js',
        'js/katex/katex.min.js',
        'js/socket.io.js',
        'js/clipboard.min.js',
        'js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
