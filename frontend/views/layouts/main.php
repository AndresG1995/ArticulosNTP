<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\DashgumAsset;
use common\widgets\Alert;
use yii\helpers\Url;
DashgumAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

          <section id="container-fluid" >
              <!-- **********************************************************************************************************************************************************
              TOP BAR CONTENT & NOTIFICATIONS
              *********************************************************************************************************************************************************** -->
              <!--header start-->
              <header class="header bg-primary">
                      <div class="sidebar-toggle-box">
                          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                      </div>
                      <div class="bar ">
          <!--logo start-->
                  <?php  echo Html::a('<b>PUCESE</b>',Url::to('/yii2_base-master/frontend/web/index.php', false), ['class'=> 'logo']); ?>
                  <!--logo end-->
                    <div class="top-menu">
                      <ul class="nav pull-right top-menu">
                            <li><a class="logout" href="/yii2_base-master/frontend/web/index.php/site/login">Login</a></li>
                      </ul>
                    </div>
                </header>
              <!--header end-->

          <aside>
              <div id="sidebar"  class="nav-collapse ">
                  <!-- sidebar menu start-->
                  <ul class="sidebar-menu" id="nav-accordion">

                      <li class="mt">
                          <a class="active" href="/yii2_base-master/frontend/web/index.php">
                              <i class="fa fa-user"></i>
                              <span>Inicio</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a href="javascript:;" >
                              <i class="fa fa-desktop"></i>
                              <span>Articulos</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="/yii2_base-master/frontend/web/articulo">Crear</a></li>
                          </ul>
                      </li>


                  </ul>
                  <!-- sidebar menu end-->
              </div>
          </aside>
          <!--sidebar end-->


          <section id="main-content">
              <section class="wrapper">

                <div class="container-fluid">
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
              </section>
          </section>


      </section>




        <?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>
