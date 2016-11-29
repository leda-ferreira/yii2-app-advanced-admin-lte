<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'login';

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="register-box">

    <div class="register-logo">
        <a href="<?= Yii::$app->homeUrl ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Please fill out the following fields to signup:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'form-signup',
            'options' => ['class' => ''],
            'fieldConfig' => [
                'options' => [
                    'class' => 'form-group has-feedback'
                ]
            ],
        ]); ?>

            <?= $form->field($model, 'username', [
                'template' => '{input}' . Html::icon('user', ['class' => 'form-control-feedback']) . '{error}'
            ])->textInput([
                'autofocus' => true,
                'placeholder' => 'Username',
            ]) ?>

            <?= $form->field($model, 'email', [
                'template' => '{input}' . Html::icon('envelope', ['class' => 'form-control-feedback']) . '{error}'
            ])->textInput([
                'autofocus' => true,
                'placeholder' => 'E-mail',
            ]) ?>

            <?= $form->field($model, 'password', [
                'template' => '{input}' . Html::icon('lock', ['class' => 'form-control-feedback']) . '{error}'
            ])->passwordInput([
                'placeholder' => 'Password'
            ]) ?>

            <div class="row">
                <div class="col-xs-8">

                </div>

                <div class="col-xs-4">
                    <?= Html::submitButton('Register', [
                        'class' => 'btn btn-primary btn-block btn-flat',
                        'name' => 'login-button'
                    ]) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>

        <?= Html::a('I already have a membership', ['site/login']) ?>

    </div>

</div>
