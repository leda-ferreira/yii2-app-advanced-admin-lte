<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\ArrayHelper;
use common\widgets\Nav;

?>
<?php $this->beginContent('@common/views/layouts/main.php') ?>

    <?php $this->beginBlock('sidebar-menu') ?>

        <?= Nav::widget([
            'items' => [
                [
                    'label' => 'Home',
                    'icon' => 'home',
                    'url' => ['/site/index'],
                ],
                [
                    'label' => 'About',
                    'icon' => 'info-circle',
                    'url' => ['/site/about'],
                ],
                [
                    'label' => 'Contact',
                    'icon' => 'envelope',
                    'url' => ['/site/contact'],
                ],
                [
                    'label' => 'Widgets',
                    'icon' => 'puzzle-piece',
                    'url' => ['/site/widgets'],
                ],
                [
                    'label' => 'Logout (' . ArrayHelper::getValue(Yii::$app->user, 'identity.username') . ')',
                    'icon' => 'sign-out',
                    'url' => ['/site/logout'],
                    'linkOptions' => [
                        'data' => [
                            'method' => 'post',
                            'params' => [
                                Yii::$app->request->csrfParam => Yii::$app->request->csrfToken,
                            ],
                        ],
                    ],
                ],
                // demo
                '<li class="header">HEADER</li>',
                [
                    'label' => 'Link',
                    'icon' => 'link',
                ],
                [
                    'label' => 'Another Link',
                    'icon' => 'link',
                ],
                [
                    'label' => 'Multilevel',
                    'icon' => 'link',
                    'items' => [
                        [
                            'label' => 'Link in level 2',
                            'url' => '#',
                        ],
                        [
                            'label' => 'Link in level 2',
                            'url' => '#',
                        ],
                    ],
                ],
            ]
        ]) ?>

    <?php $this->endBlock() ?>

    <?= $content ?>

<?php $this->endContent() ?>
