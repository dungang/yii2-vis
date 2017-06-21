<?php
/**
 * Author: dungang
 * Date: 2017/6/21
 * Time: 12:28
 */

namespace dungang\vis;


use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class VisTimeLine extends Widget
{
    public $items = [];
    public $visOptions;
    public $options;

    public function run()
    {
        VisAsset::register($this->getView());
        $this->options['id'] = $id = $this->getId();
        $data = Json::encode($this->items);
        $visOptions = $this->visOptions?Json::encode($this->visOptions):'{}';
        $jsCode = "new vis.Timeline(document.getElementById('$id',new vis.DataSet($data),$visOptions));";
        $this->view->registerJs($jsCode);
        return Html::tag('div','',$this->options);
    }
}