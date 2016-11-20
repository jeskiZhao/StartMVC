<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author jeski
 */
namespace sys\core;
class Route{
    //put your code here
        public $controller;
        public $action;
	function __construct(){
	    if($_SERVER['REQUEST_URI']&&$_SERVER['REQUEST_URI']!="/"){//获取url
                $pathdata=explode("/", trim($_SERVER['REQUEST_URI'],"/"));
                if(isset($pathdata[0])){//获取控制器
                    $this->controller=$pathdata[0];
                    unset($pathdata[0]);
                }else{
                    $this->controller="index";
                }
                if(isset($pathdata[1])){//获取方法
                     $this->action=$pathdata[1];
                     unset($pathdata[1]);
                }else{
                     $this->action="index";
                }    
                $i=2;
                $num=count($pathdata)+2;
                while($i<$num){
                    if(isset($pathdata[$i+1])){//拼装参数
                        $_GET[$pathdata[$i]]=$pathdata[$i+1]; 
                    }
                    $i=$i+2;
                }
            }else{
                $this->controller="index";
                $this->action="index";
            }
	}
}

?>
