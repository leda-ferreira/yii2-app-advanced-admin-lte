<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'login';

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">

    <div class="login-logo">
        <a href="<?= Yii::$app->homeUrl ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Please choose your new password:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'reset-password-form',
            'options' => ['class' => ''],
            'fieldConfig' => [
                'options' => ['class' => 'form-group has-feedback']
            ],
        ]); ?>

            <?= $form->field($model, 'password', [
                'template' => '{input}' . Html::icon('lock', ['class' => 'form-control-feedback']) . '{error}'
            ])->passwordInput([
                'autofocus' => true,
                'placeholder' => 'Please type your new password',
            ]) ?>

            <div class="row">
                <div class="col-xs-4 col-xs-offset-8">
                    <?= Html::submitButton('Save', [
                        'class' => 'btn btn-primary btn-block btn-flat',
                        'name' => 'login-button'
                    ]) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
