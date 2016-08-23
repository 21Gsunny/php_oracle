<?php

/**
 * 核心加载类
 */

class Framework
{

    public static function bootstrap()
    {
        self::init();
        self::autoload();
        self::dispatch();

    }

    /**
     * 初始化
     * @return [type] [description]
     */
    private static function init()
    {
        define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');
        define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');
        define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');
        define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);
        require CORE_PATH . "Controller.class" . EXT;
        require CORE_PATH . "Loader.class" . EXT;
        require DB_PATH . "Oracle.class" .  EXT;
        $GLOBALS['config'] = include CONFIG_PATH . "config" . EXT;
    }

    // 自动加载
   private static function autoload()
   {
        spl_autoload_register(array(__CLASS__,'load'));
   }

    public static function load($classname)
    {
        if (substr($classname, -10) == "Controller")
        {
            // Controller
            require_once CURR_CONTROLLER_PATH . "$classname.class.php";
        }
        elseif (substr($classname, -5) == "Model")
        {
            // Model
           // require_once  MODEL_PATH . "$classname.class.php";
        }
    }
   //路由分发
   private static function dispatch()
   {
        $controller_name = CONTROLLER . "Controller";
        $action_name = ACTION . "Action";
        $controller = new $controller_name;
        $controller->$action_name();
   }
}
?>
