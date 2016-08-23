<?php

class Controller
{
    // oracle 操作
    protected static $DB;
    // 加载类
    protected $loader;
    function __construct()
    {
        $this->loader = new Loader();
        self::$DB = new Oracle($GLOBALS['config']);
    }

}

?>
