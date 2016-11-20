<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author jeski
 */
namespace sys\core;
class App {
    //put your code here
    public static $classMap = array();
    public $assign = array();
    //启动框架
    public static function run(){
        $route = new Route();
        $controller=$route->controller;
        $action=$route->action;
        $controllerFile=APP_PATH."home".DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR.$controller."Controller.php";
        $controllerClass = "\\".MODULE."\\controller\\".$controller."Controller";//控制器的类
        if(is_file($controllerFile)){
            include $controllerFile;
            $ctrl = new $controllerClass;
            $ctrl->$action();
        }else{
            $e = new \Exception("找不到控制器".$controller);
            throw $e;
        }
    }
    //自动加载命名空间
    public static function load($class){
        if(isset($classMap[$class])){
              return true;
        }else{
            $file=ROOT_PATH.$class.".php";
	    if(is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
               return false;
            }
    }
    }
    //给模板中传递数据
    function assign($name,$value){
        $this->assign[$name] = $value;
    }
    //显示模板
    function display($v){
        $viewFile = APP_PATH."home".DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR.$v;
        if(is_file($viewFile)){ 
            extract($this->assign);
            include $viewFile;
        }
    }
}

?>
