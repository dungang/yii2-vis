<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2017/1/18
 * Time: 14:47
 */

namespace dungang\vis;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class VisNetwork  extends Widget
{
    public $nodes = [];
    public $edges = [];
    public $visOptions;
    public $options;

    public function run()
    {
        VisAsset::register($this->getView());
        $this->options['id'] = $id = $this->getId();
        $data = Json::encode([
            'nodes'=>$this->nodes,
            'edges'=>$this->edges,
        ]);
        $visOptions = $this->visOptions?Json::encode($this->visOptions):'{}';
        $jsCode = "new vis.Network(document.getElementById('$id',$data,$visOptions));";
        $this->view->registerJs($jsCode);
        return Html::tag('div','',$this->options);
    }

}