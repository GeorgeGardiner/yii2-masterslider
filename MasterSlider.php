<?php
namespace commonmode\masterslider;

use yii\base\Widget;
use yii\helpers\Json;
use yii\helpers\Html;

class MasterSlider extends Widget {

    public $id = null;
    public $skin = "default";
    public $options = [];
    public $slides = '<div class="ms-slide"></div>';
    static $count = 1;

    public function init()
    {
        parent::init();
        if ($this->id == null) {
            $this->id = 'masterslider-'.self::$count;
            self::$count++;
        }
    }

    public function run()
    {
        echo $this->renderWidget() . "\n";
        $options = Json::htmlEncode($this->options);
        $this->view->registerJs("$('#".$this->id."').masterslider(".$options.");");
        $msAsset = MasterSliderAsset::register($this->view);
        $this->view->registerCssFile($msAsset->baseUrl.'/skins/'.$this->skin.'/style.css', ['depends'=>MasterSliderAsset::className()]);
    }

    protected function renderWidget()
    {
        $contents = [];
        $contents[] = Html::tag('div', $this->slides, ['id'=>$this->id, 'class'=>'master-slider ms-skin-'.$this->skin]);
        return implode("\n", $contents);
    }
}
