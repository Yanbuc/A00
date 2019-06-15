<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 19:34
 */

namespace Common\Controller;
use Admin\Model\LogModel;
use \Common\Controller\AdminController ;

class AdminLoginController extends AdminController
{
    private $log = null;
    public function __construct()
    {
        parent::__construct();
        $tmp=C("SESSION_NAME");
        if(empty($_SESSION[$tmp])){
            $this->redirect("Admin/Index/index");
            return ;
        }
        $tmp=C("SESSION_NAME");
        $this->log=new LogModel();
        $this->assign("username",$_SESSION[$tmp]);
    }

    public function getRetnArray($status,$message){
        $retn=C("RETN_ARRAY");
        $retn["status"]=$status;
        $retn["message"]=$message;
        return $retn;
    }

    // 写入日志
    public function putLog($logMessage,$logLevel){
        $logMessage=getLogMessage($logMessage);
        $logDate=date("Y_m_d_H:i:s");
        $logM=$this->log;
        $logUser=$_SESSION["username"];
        $logM->insertLog2($logLevel,$logMessage,$logDate,$logUser);
    }

}