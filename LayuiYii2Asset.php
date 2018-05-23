<?php
/**
 * Author: Jonas.Huang <jonas.huang@qq.com>
 * Date: 2018/5/16
 */

namespace Yii2\layuiadmin;


use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/layui-admin/dist';
    public $css = [
        'css/layui.css',
    ];
    public $js = [
        'layui.js',
    ];
    public $depends = [
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}