<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

$this->context->layout = 'login';

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="login-box">

    <div class="login-logo">
        <a href="<?= Yii::$app->homeUrl ?>"><b>Admin</b>LTE</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => ''],
            'fieldConfig' => [
                'options' => [
                    'class' => 'form-group has-feedback'
                ]
            ],
        ]); ?>

            <?= $form->field($model, 'username', [
                'template' => '{input}' . Html::icon('envelope', ['class' => 'form-control-feedback']) . '{error}'
            ])->textInput([
                'autofocus' => true,
                'placeholder' => 'Username',
            ]) ?>

            <?= $form->field($model, 'password', [
                'template' => '{input}' . Html::icon('lock', ['class' => 'form-control-feedback']) . '{error}'
            ])->passwordInput([
                'placeholder' => 'Password'
            ]) ?>

            <div class="row">
                <div class="col-xs-8">
                    <?= $form->field($model, 'rememberMe', [
                        'options' => ['class' => 'checkbox icheck'],
                    ])->checkbox([
                        'template' => "{beginLabel}\n{input}\n{labelTitle}\n{endLabel}",
                    ]) ?>
                </div>

                <div class="col-xs-4">
                    <?= Html::submitButton('Sign In', [
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

    </div>

</div>

<?php
$js = <<<JS
$('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
});
JS;
echo $this->registerJs($js, yii\web\View::POS_READY, 'iCheck-login')
?>
