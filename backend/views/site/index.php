<?php

/* @var $this yii\web\View */
 use yii\helpers\Html;
 use yii\helpers\Url;
$this->title = 'Home';
?>
<div class="site-index">

    <div class="jumbotron">

      <?= Html::img(Url::to('/yii2_base-master/frontend/views/site/img/lg.JPG', false), ['alt' => 'My logo', 'width'=>'300']) ?>

        <h1>PUCESE</h1>

        <p class="lead">Registros de Artículos Científicos</p>

<?php
//dirname(dirname(__DIR__))
//print_r( );
//die();
?>
    </div>

    <div class="body-content">

    </div>
</div>
