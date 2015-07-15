<?php
/**
 * AssetBundle.php
 * @author Gary Burge http://garyburge.com
 */

namespace garyburge\yii\jsplumb;

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
        'query.jsPlumb.min.js'
    ];
}
