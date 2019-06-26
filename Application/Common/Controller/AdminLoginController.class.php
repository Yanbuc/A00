<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 19:34
 */

namespace Common\Controller;
use Admin\Model\LogModel;
use Admin\Model\UsersModel;
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
        $this->assign("userId",$_SESSION["user_id"]);
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

    // 一个用来检查用户权限是否合法的参数
    public function checkUserPrevelidges($pid){
        $userModel=new UsersModel();
        $userId=$_SESSION["user_id"];
        $sql="select * from ".C("A00_USERS")." where `id` =".$userId."  and `user_del`=0";
        $data=$userModel->baseFind($sql);
        if(count($data)==0){
            return false;
        }
        $data=$data[0];
        if($data["prevelidge_id"]==""){
            return false;
        }
        $previelidge=explode(",",$data["prevelidge_id"]);
        $preId=C("ADMIN_PREVELIDGE_ID");
        foreach($previelidge as $k=>$v){
            if($v==$pid||$v==$preId){  // 3 是全部权限
                return true;
            }
        }
        return false;
    }

}