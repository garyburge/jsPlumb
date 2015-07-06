<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/garyburge/yii2-jsplumb';

    /**
     * @inherit
     */
    public $css = [
        'dom.jsPlumb.min.js',
        'query.jsPlumb.min.js
    ];
}
