<?php
$yii = dirname(__FILE__).'/1.1.10/yii.php';
$config = dirname(__FILE__).'/protected/config/home.php';
// Remove the following lines when in production mode
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
require_once($yii);
Yii::createWebApplication($config)->runEnd('home');