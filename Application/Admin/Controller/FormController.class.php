<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 0:10
 */

namespace Admin\Controller;
use Common\Controller\AdminBaseController;
use Common\Controller\AdminLoginController;

class FormController extends  AdminLoginController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function showLayOut(){
        $this->display();
    }
    public function showElements(){
        $this->display();
    }

}