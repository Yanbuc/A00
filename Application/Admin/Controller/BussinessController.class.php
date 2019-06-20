<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/20
 * Time: 18:29
 */

namespace Admin\Controller;
use Common\Controller\AdminLoginController;

class BussinessController extends AdminLoginController
{
    public  function  showAddsellProduct(){
        $this->display("Bussiness/showAddsellProduct");
        return ;
    }

    public function showAddProduct(){
       $this->display("Bussiness/showAddProduct");
       return;
    }
}