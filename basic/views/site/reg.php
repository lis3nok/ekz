<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'method' => 'post',
        'action' => ['/site/save-user'],
    ]); ?>

        <?= $form->field($model, 'fio')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'username')->textInput() ?>
        <?= $form->field($model, 'email')->Input('email') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>

        <input type="password" name="confirmPass" id="">
        <input type="checkbox" name="agree" id="">

        
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>