<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

<div id="login-page">
        <div class="container-fluid">
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'options'=>['class' => 'form-login']]); ?>

                <!--h2 class="form-login-heading">sign in now</h2-->
                <?=   Html::tag('h2', 'Iniciar Sesión', ['class'=>'form-login-heading']);  ?>

                <div class="login-wrap">

                    <?= $form->field($model, 'username')->label('Nombre de Usuario')->textInput(['autofocus' => true, 'placeholder'=>'Nombre de Usuario']) ?>

                    <?= $form->field($model, 'password')->label('Contraseña')->passwordInput(['placeholder'=>'Ingrese la contraseña']) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div style="color:#999;margin:1em 0 ">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    </div>
                    <div class="form-group">
                      <?php
                      echo Html::tag('button', '<i class="fa fa-user"></i> Login', ['name'=>'btnSubmit','type'=>'submit', 'class' => 'btn btn-theme btn-block'] );
                       ?>
                       <br/>
                      <?= Html::a('Inicio', ['index'], ['class'=>'btn btn-theme btn-warning']) ?>
                        <!--?= Html::submitButton('Login', ['class' => 'btn btn-theme btn-block', 'name' => 'login-button']) ?-->
                    </div>
                </div>



            <?php ActiveForm::end(); ?>
        </div>
        </div>

</div>
