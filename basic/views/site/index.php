<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<!-- вывод кол-во решенных заявок -->
    <div class="jumbotron">
        <h1>Решенных заявок: </h1>

         <h2>Количество решенных заявок: <?= $count ?></h2>

    </div>

    <div class="body-content">

        <div class="row">
        <?php
        // вывод решенных заявок с изобр.
        foreach($request as $model){
            echo'
                <div class="col-lg-3">
                <h2>'.$model->name.'</h2>
                <p>'.$model->description.'</p>
                <p>'.$model->timestamp.'</p>';
                echo Html::img('@web/uploads/'.$model->photoBefore.'', ['alt' =>'logo']) ;
                echo '
                </div>
            ';
        }
        ?>    
        </div>

    </div>
</div>
