<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author jeski
 */
return [
    //数据库相关配置
    'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pwd' => ' ',
    'db_name' => 'start',
    'db_table_prefix' => "start_",
    'db_charset' => 'utf-8',
    
    'default_module' => 'home',
    'default_controller' => 'Index',
    'default_action' => 'index',
    'url_type' => '2',//url模式 1传统模式，2pathinfo模式
    
    'cache_path' => RUNTIME_PATH."cache".DIRECTORY_SEPARATOR,//缓存文件存放路径
    'cache_prefix' => 'cache_',//缓存文件前缀
    'cache_type' => 'file', //缓存文件类型
    'compile_path' => RUNTIME_PATH.'compile'.DIRECTORY_SEPARATOR,//编译文件存放路径
    
    'view_path' => APP_PATH.'home'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR,//模板文件路径
    'view_path' => '.php',//模板文件后缀
    
    'auto_cache' => true,//自动缓存开启
    'url_html_suffix' => 'html',//伪静态后缀
];

?>
