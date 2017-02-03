<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'css/site.css',
      'dashgum/css/style.css',
      'dashgum/css/style-responsive.css',
      'dashgum/css/bootstrap.css',
      'dashgum/font-awesome/css/font-awesome.css',
      'dashgum/css/zabuto_calendar.css',
      'dashgum/js/gritter/css/jquery.gritter.css',
      'menu/menu.css',
    ];
    public $js = [


      'dashgum/js/jquery.dcjqaccordion.2.7.js',
      'dashgum/js/jquery.dcjqaccordion.2.7.js',
      'dashgum/js/jquery.scrollTo.min.js',
      'dashgum/js/jquery.nicescroll.js',
      'dashgum/js/common-scripts.js',



    ];
    public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
    ];
}
/*
'dashgum/js/chart-master/Chart.js',
'dashgum/js/jquery.js',
'dashgum/js/jquery-1.8.3.min.js',
'dashgum/js/bootstrap.min.js',
'dashgum/js/jquery.dcjqaccordion.2.7.js',
'dashgum/js/jquery.dcjqaccordion.2.7.js',
'dashgum/js/jquery.scrollTo.min.js',
'dashgum/js/jquery.nicescroll.js',
'dashgum/js/jquery.sparkline.js',
'dashgum/js/common-scripts.js',
'dashgum/js/gritter/js/jquery.gritter.js',
'dashgum/js/gritter-conf.js',
'dashgum/js/sparkline-chart.js',
'dashgum/js/zabuto_calendar.js',

*/
