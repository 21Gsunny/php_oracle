<?php

/**
* 加载类
*/
class Loader
{

    public function library($lib)
    {
        include LIB_PATH . "$lib.class.php";
    }
}
?>
