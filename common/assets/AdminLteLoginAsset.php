<?php

namespace common\assets;

/**
 * Description of AdminLteLoginAsset
 *
 * @author leda
 */
class AdminLteLoginAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@common/assets/files';

    /**
     * @inheritdoc
     */
    public $css = [
        'dist/css/AdminLTE.css',
        'plugins/iCheck/square/blue.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'plugins/iCheck/icheck.min.js',
        'plugins/bootbox/bootbox.min.js',
        'dist/js/yii-override.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
