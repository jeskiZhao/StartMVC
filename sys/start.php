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
define('APP_PATH',ROOT_PATH.'app'.DIRECTORY_SEPARATOR);//应用程序目录
define("COMMON_PATH",ROOT_PATH.'common'.DIRECTORY_SEPARATOR);//公共目录
define('RUNTIME_PATH',ROOT_PATH.'runtime'.DIRECTORY_SEPARATOR);//运行时目录路径
define('CONF_PATH',ROOT_PATH."config",DIRECTORY_SEPARATOR);//全局配置路径
define('CORE_PATH',ROOT_PATH."sys".DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR);//核心目录路径

require_once COMMON_PATH.'functions.php';
require_once CORE_PATH.'App.php';
//require CORE.'Loader.php';//引入自动加载文件

//实例化自动加载类
//$loader=new core\Loader();
//$loader->addNamespace('core',ROOT_PATH.'sys'.DIRECTORY_SEPARATOR.'core');
//$loader->addNamespace('home',APP_PATH.'home');
//$loader->register();//注册命名空间

//加载全局配置
//\core\Config::set(include CONF_PATH.'config.php');