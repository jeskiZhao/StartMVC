<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of start
 *
 * @author jeski
 */
define("ROOT_PATH",__DIR__.DIRECTORY_SEPARATOR);
define("MODULE","home");
define("DEBUG",true);
if(DEBUG){
    ini_set("display_errors",true);
}else{
    ini_set("display_errors",false);
}
require_once 'sys/start.php';

spl_autoload_register("\sys\core\App::load");//new一个类不存在时，触发app里边的load方法
\sys\core\App::run();

?>
