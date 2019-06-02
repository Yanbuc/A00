<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 19:31
 */

namespace Admin\Controller;
use Common\Controller\AdminBaseController;
use Common\Controller\AdminLoginController;
use Common\Filter\FilterFunction;
use Common\Service\UsersService;

class ChpwdController  extends AdminLoginController
{
    public function index(){
        $this->display();
    }

    public function changePwd(){
        $data=I("post.");
        $username=$data["username"];
        $pwd=$data["password"];
        if(empty($username)|| empty($pwd)){
            $this->error("没有输入用户名或密码");
            //$this->redirect("Admin/DashBoard/index");
            return ;
        }
        $username=FilterFunction::filterUserName($username);
        $userService=new UsersService();
        $da=$userService->getUserDataByUserName($username);
        if($da){
            $pwd=substr(md5($pwd),0,16);
            $tmp=array("username"=>$username,"password"=>$pwd);
            $userService->updateUserByUserName($tmp);
            $this->redirect("Admin/DashBoard/index");
            return ;
        }
        $this->error("输入的用户名错误");
    }

}