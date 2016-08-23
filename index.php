<?php
/**
 * 入口文件
 */
date_default_timezone_set('PRC');
// 应用入口文件
define("DS", DIRECTORY_SEPARATOR);
// 定义项目路径
define('APP_PATH', __DIR__ . '/application'. DS);
require __DIR__.'/framework/start.php';

//访问路由 p 模块, c 控制器 , a 方法
//index.php?p=admin&c=Goods&a=add
?>
