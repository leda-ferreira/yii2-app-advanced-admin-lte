<?php

namespace common\assets;

/**
 * Description of AdminLteAsset
 *
 * @author leda
 */
class AdminLteAsset extends \yii\web\AssetBundle
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
        'dist/css/skins/skin-blue.css',
        'dist/css/common.css',
        // add other plugins you need here
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'plugins/fastclick/fastclick.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/bootbox/bootbox.min.js',
        // add other plugins you need here
        'dist/js/app.js',
        'dist/js/yii-override.js',
        'dist/js/common.js',
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
