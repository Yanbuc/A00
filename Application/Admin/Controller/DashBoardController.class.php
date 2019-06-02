<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/5
 * Time: 23:26
 */

namespace Admin\Controller;
use Common\Controller\AdminBaseController;
use Common\Controller\AdminLoginController;


class DashBoardController extends AdminLoginController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
       $this->display();
     }
}