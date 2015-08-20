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
        'uran1980\yii\assets\jQueryEssential\JqueryEasingAsset
    ];
}
