<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\LoginAsset;
use common\widgets\Alert;
use yii\helpers\Url;
LoginAsset::register($this);
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
<body class="bg-info">
<?php $this->beginBody() ?>
	      <div id="login-page">
  	  	  <div class="container-fluid">
            <?php  echo $content;  ?>
  	  	  </div>
	      </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
