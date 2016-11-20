<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loader
 *
 * @author jeski
 */
namespace core;
class Loader {
    //put your code here
    protected  static $prefixes = array();
    
    /**
     * 在SPL自动加载器栈中注册加载器
    */
    public static function  register(){
        spl_autoload_register('core\\Loader::loadClass');
    }
    
    /**
     * 添加命名空间前缀和文件目录树
     */
    public static function  addNamespace($prefix,$base_dir,$prepend = false){
         $prefic = trim($prefix,'\\').'\\';
         
         $base_dir = rtrim($base_dir,'/').DIRECTORY_SEPARATOR;
         $base_dir = rtrim($base_dir,DIRECTORY_SEPARATOR).'/';
         
         if($prepend){
             array_unshift(self::$prefies[$prefix],$base_dir);
         }else{
             array_push(self::$prefies[$prefix],$base_dir);
         }
         
    }
    /**
     * 由类名载入相应的类文件
     */
    public static function loadClass($class){
        $prefix = $class;

        
    }
}

?>
