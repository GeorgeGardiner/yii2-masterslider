<?php

namespace commonmode\masterslider;

use yii\web\AssetBundle;

class JqueryEasingAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-easing-original';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'jquery.easing.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
