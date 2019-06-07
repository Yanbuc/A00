<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 19:34
 */

namespace Common\Controller;
use \Common\Controller\AdminController ;

class AdminLoginController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $tmp=C("SESSION_NAME");
        if(empty($_SESSION[$tmp])){
            $this->redirect("Admin/Index/index");
            return ;
        }
        $tmp=C("SESSION_NAME");
        $this->assign("username",$_SESSION[$tmp]);
    }

    public function getRetnArray($status,$message){
        $retn=C("RETN_ARRAY");
        $retn["status"]=$status;
        $retn["message"]=$message;
        return $retn;
    }
}