<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Привет не админ!</h1>
        <!-- ссылка на упр заявками -->
         <?= Html::a('Управление заявками', ['/request'], ['class' => 'profile-link']) ?>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            
        </div>

    </div>
</div>
