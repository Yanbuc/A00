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



   public function showChangePwdInfo(){
      $userId=empty($_GET["userId"])?0:intval($_GET["userId"]);
      if($userId==0){
          $message="信息缺少";
          $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
          $logMessage="修改用户密码失败，没有输入user_id";
          $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"));
          echo json_encode($retn);
          return ;
      }
      $selSql=$this->produceSelectUserSql($userId);
      $userModel=new UsersModel();
      $data=$userModel->baseFind($selSql);
      if(count($data)==0){
          $message="you are a silly boy!!!";
          $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
          $logMessage="修改用户密码失败，传入了用户id,但是数据库之中的用户名不存在。";
          $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"));
          echo json_encode($retn);
          return ;
      }
      $id=$data[0]["id"];
      $this->assign("id",$id);
      $this->display("User/showChangePwdInfo");
      return ;
   }

   public  function changeUserName(){
       $data=$_POST;
       $userId=empty($data["user_id"])?0:intval($data["user_id"]);
       $name=empty($data["username"])?"":strval($data["username"]);
       $realName=empty($data["real_name"])?"":strval($data["real_name"]);
       if($userId==0||$name==""||$realName==""){
           $message="缺少输入的信息";
           $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
           $logMessage="修改用户信息失败,但是缺少必要的信息";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_INFO_EXCEPTION"));
           echo json_encode($retn);
           return ;
       }
       if(strlen($name)>20){
           $message="用户名的长度太长,不符合要求";
           $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
           $logMessage="修改用户信息失败,用户名的长度过长";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_INFO_EXCEPTION"));
           echo json_encode($retn);
           return ;
       }
       $selSql=$this->produceSelectUserSql($userId);
       $userModel=new UsersModel();
       $userData=$userModel->baseFind($selSql);
       if(count($userData)==0){
           $message="you are a silly boy ";
           $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
           $logMessage="修改用户信息失败,传入了user_id,但是数据库之中的没有存在用户";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_INFO_EXCEPTION"));
           echo json_encode($retn);
           return ;
       }
       $userData=$userData[0];
       if($userData["useralis"]!=$name){
           $change=array();
           $change["useralis"]=$name;
           $updateSql=$this->produceUpdateUserInfo($userId,$change);
           $userModel->baseUpdate($updateSql);
           $logMessage="修改用户信息,将用户名从".$userData["username"]." 转化为".$name;
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_INFO"));
           $_SESSION["username"]=$name;
       }
       $retn=$this->getRetnArray(C("RETN_SUCCESS"),"用户信息修改成功");
       $retn["id"]=$userId;
       $retn["name"]=$name;
       echo json_encode($retn);
       return ;
   }

   // 修改密码操作
   public function changeUserPwd(){
       $data=$_POST;
       $password=empty($data["password"])?"":strval($data["password"]);
       $newPassword=empty($data["newPassword"])?"":strval($data["newPassword"]);
       $confirmPassword=empty($data["confirmPassword"])?"":strval($data["confirmPassword"]);
       $userId=empty($data["userId"])?0:intval($data["userId"]);
       if($userId==0||$password==""||$newPassword==""||$confirmPassword==""){

           $message="输入的信息缺乏";
           $retn=$this->getRetnArray(C("RENT_SUCCESS"),$message);
           echo json_encode($retn);
           return ;
       }
       if($newPassword!=$confirmPassword){
           $logMessage="修改用户密码失败，两次输入的密码不相同";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"));
           $message="两次输入的密码不相同";
           $retn=$this->getRetnArray(C("RENT_SUCCESS"),$message);
           echo json_encode($retn);
           return ;
       }

       $selSql=$this->produceSelectUserSql($userId);
       $userModel=new UsersModel();
       $userData=$userModel->baseFind($selSql);
       if(count($userData)==0){
           $message="you are a silly boy!!!";
           $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
           $logMessage="修改用户密码失败，传入了用户id,但是数据库之中的用户名不存在。";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"));
           echo json_encode($retn);
           return ;
       }
       $userData=$userData[0];
       $pwd=encodePassword($password);
       if($pwd!=$userData["password"]){
           $message="输入的原来的密码不正确";
           $retn=$this->getRetnArray(C("RETN_ERROR"),$message);
           $logMessage="修改用户密码失败，传入的原本的用户密码，不正确。";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"));
           echo json_encode($retn);
           return ;
       }
       $newPwd=encodePassword($newPassword);
       $updateData=array();
       $updateData["password"]=$newPwd;
       $updateSql=$this->produceUpdateUserInfo($userId,$updateData);
       $userModel->baseUpdate($updateSql);
       $message="用户密码修改成功";
       $retn=$this->getRetnArray(C("RETN_SUCCESS"),$message);
       $logMessage="用户修改密码成功";
       $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PASSWORD"));
       echo json_encode($retn);
       return ;

   }


    private function produceSelectUserSql($userId){
        $sql="select * from ".C("a00_users")." where `id`=".$userId." and `user_del`=0";
        return $sql;
    }

    private function produceUpdateUserInfo($user_id,$data){
        $sql="update ".C("A00_USERS")." set ";
        $body="";
        foreach ( $data as $k=>$v) {
            $body.=$k."='".$v."',";
        }
        $body=trim($body,",");
        $sql=$sql.$body."  where `id`=".$user_id;
        return $sql;
    }
}