<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 *
 * @author jeski
 */
namespace home\model;
class model extends \PDO{
    //put your code here
    function __construct() {
        $dns="mysql:host=localhost;dbname=test";
        $username="root";
        $pwd="";
        parent::__construct($dsn, $username, $pwd);
    }
}

?>
