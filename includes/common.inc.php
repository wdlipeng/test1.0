<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2016-6-10
*/
if (!defined('IN_TG')) {
    exit('Access Defined!');
}
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));

if(PHP_VERSION<4.1){
    exit('PHP版本太低');
}

//引入函数库
require ROOT_PATH.'includes/global.func.php';


//执行耗时
define('START_TIME',_runtime());


?>
