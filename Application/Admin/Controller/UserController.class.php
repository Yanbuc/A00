<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/15
 * Time: 19:24
 */

namespace Admin\Controller;
use Admin\Model\UsersModel;
use Common\Controller\AdminLoginController;

class UserController extends AdminLoginController
{
   public function showUserInfo(){
      $userId=empty($_GET["userId"])?0:intval($_GET["userId"]);
      if($userId==0){
          $logMessage="查询用户信息操作出现异常,没有传入userId";
          $this->putLog($logMessage,C("LOG_LEVEL_SEARCH_USER_INFO_EXCEPTION"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
          echo json_encode($retn);
          return ;
      }
      $selSql=$this->produceSelectUserSql($userId);
      $userModel=new UsersModel();
      $userData=$userModel->baseFind($selSql);
      if(count($userData)==0){
          $logMessage="查询用户信息操作出现异常,传入了userId,但是数据库之中不存在这个用户";
          $this->putLog($logMessage,C("LOG_LEVEL_SEARCH_USER_INFO_EXCEPTION"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
          echo json_encode($retn);
          return ;
      }
      $userData=$userData[0];
      $this->assign("user",$userData);
      $this->display("User/showUserInfo");
      return;
   }

   private function produceSelectUserSql($userId){
      $sql="select * from ".C("a00_users")." where `id`=".$userId." and `user_del`=0";
      return $sql;
   }

}