<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2017/1/18
 * Time: 14:45
 */

namespace dungang\vis;


use yii\web\AssetBundle;

class VisAsset extends AssetBundle
{
    public $sourcePath="@bower/vis/dist/";
    public $js=['vis.js'];
    public $css=['vis.min.css'];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}