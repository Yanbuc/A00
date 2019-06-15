<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/15
 * Time: 19:24
 */

namespace Admin\Controller;
use Common\Controller\AdminLoginController;

class UserController extends AdminLoginController
{
   public function showUserInfo(){
      $this->display("User/showUserInfo");
      return;
   }
}