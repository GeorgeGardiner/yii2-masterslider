<?php

namespace commonmode\masterslider;

use yii\web\AssetBundle;

class MasterSliderAsset extends AssetBundle
{
    public $sourcePath = '@bower/masterslider';
    public $baseUrl = '@web';
    public $css = [
        'style/masterslider.css',
    ];
    public $js = [
        'masterslider.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\components\JqueryEasingAsset'
    ];
}
