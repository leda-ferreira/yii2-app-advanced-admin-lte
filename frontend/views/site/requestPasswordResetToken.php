<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'login';

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="login-box">

    <div class="login-logo">
        <a href="<?= Yii::$app->homeUrl ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Please fill out your email. A link to reset password will be sent there.</p>

        <?php $form = ActiveForm::begin([
            'id' => 'request-password-reset-form',
            'options' => ['class' => ''],
            'fieldConfig' => [
                'options' => ['class' => 'form-group has-feedback']
            ],
        ]); ?>

            <?= $form->field($model, 'email', [
                'template' => '{input}' . Html::icon('envelope', ['class' => 'form-control-feedback']) . '{error}'
            ])->textInput([
                'autofocus' => true,
                'placeholder' => 'E-mail',
                'type' => 'email',
            ]) ?>

            <div class="row">
                <div class="col-xs-4 col-xs-offset-8">
                    <?= Html::submitButton('Send', [
                        'class' => 'btn btn-primary btn-block btn-flat',
                        'name' => 'login-button'
                    ]) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

        <?= Html::a('Return to login', ['site/login']) ?>

    </div>

</div>
