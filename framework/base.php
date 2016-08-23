<?php

    // 分隔符
    defined("DS") or define("DS" , DIRECTORY_SEPARATOR);
    //框架类文件根目录
    defined("ROOT") or define("ROOT",dirname(__FILE__) .DS);
    //项目目录
    defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . DS);
  //  define("FRAMEWORK_PATH", ROOT . "framework" . DS);
  //  项目配置文件目录
    define("CONFIG_PATH", APP_PATH . "config" . DS);
    //项目控制器目录
    define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
    //框架核心文件目录
    define("CORE_PATH", ROOT . "core" . DS);
    //框架数据库类文件目录
    define('DB_PATH', ROOT . "database" . DS);
    //framework目录中非核心类和函数
    define("LIB_PATH", ROOT . "libraries" . DS);
    //文件后缀
    defined('EXT') or define('EXT', '.php');
?>
