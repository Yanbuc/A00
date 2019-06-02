<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/5
 * Time: 23:32
 */

namespace Admin\Controller;
use Common\Controller\AdminBaseController;
use \Common\Controller\AdminController;
use Common\Controller\AdminLoginController;

class ChartsController extends  AdminLoginController
{
   public function __construct()
   {
       parent::__construct();
   }

    public function index(){
     $this->display();
 }
}