<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <!-- форма заявок -->

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->dropDownList($items) ?>
    
    <?= $form->field($model, 'timestamp')->textInput() ?>
    
    <?= $form->field($model, 'photoBefore')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'photoAfter')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>


</div>
