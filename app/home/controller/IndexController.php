<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author jeski
 */
namespace home\controller;
class IndexController extends \sys\core\App{
    //put your code here
    function index(){
        $data = "welcome";
        $this->assign("data",$data);
        echo $this->display("index.html");
    }
}

?>
