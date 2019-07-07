<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/15
 * Time: 19:24
 */

namespace Admin\Controller;
use Admin\Model\PrevelidgeModel;
use Admin\Model\UsersModel;
use Common\Controller\AdminLoginController;

class UserController extends AdminLoginController
{
    // 显示用户信息
   public function showUserInfo(){
      $userId=empty($_GET["userId"])?0:intval($_GET["userId"]);
      if($userId==0){
          $logMessage="查询用户信息操作出现异常,没有传入userId";
          $this->putLog($logMessage,C("LOG_LEVEL_SEARCH_USER_INFO_EXCEPTION"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
          echo json_encode($retn);
          return ;
      }
      $selectUserId=$_SESSION["user_id"];
      $can=false;
      if($selectUserId==$userId){
          $can=true;
      }
      if(!$can){
        $can=$this->checkUserPrevelidges(C("SELECT_OTHER_USERS_PREVELIDGE"));
        if(!$can){
            $this->error("没有权限，快去和管理员沟通");
            return ;
        }
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
      $selPreSql=$this->produceSelectPrevelidgeSql($userData["prevelidge_id"]);
      $prevelidgeModel=new PrevelidgeModel();
      $preData=$prevelidgeModel->baseFind($selPreSql);
      $this->assign("user",$userData);
      $this->assign("prevelidge",$preData);
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
           $change["user_change_date"]=date("Y_m_d_H:i:s");
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

   public function showUserInfoList(){
       // 权限检查
       $can=$this->checkUserPrevelidges(C("SELECT_OTHER_USERS_PREVELIDGE"));
       if(!$can){
           $this->error("没有权限，快去和管理员沟通");
           return ;
       }
       $pid=$_GET["p"];
       if(empty($pid)){
           $pid=1;
       }
       $userModel=new UsersModel();
       $pageSize = C("PAGE_SIZE");
       $count = $userModel->getCount();
       if($pageSize*($pid-1)>$count){
           $pid=1;
       }
       $p = getPage($count, $pageSize);

       $selSql=$this->produceSelectUserListSql();
       $userData=$userModel->baseFind($selSql);
       if(count($userData)!=0){
           $this->assign("data",$userData);
           $this->assign("show",$p->show());
       }
       $this->display("User/showUserInfoList");
       return ;
   }

   // 显示所有的用户权限
   public function showUserPrevelidge(){
       $userId=empty($_GET["userId"])?0:intval($_GET["userId"]);
       if($userId==0){
           $logMessage="查询用户权限操作出现异常,没有传入userId";
           $this->putLog($logMessage,C("LOG_LEVEL_SELECT_USER_PREVELIDGE_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
           echo json_encode($retn);
           return ;
       }
       $can=$this->checkUserPrevelidges(C("SELECT_OTHER_USERS_PREVELIDGE"));
       if(!$can){
           $this->error("没有权限，快去和管理员沟通");
           return ;
       }
      $selSql=$this->produceSelectUserSql($userId);
      $userModel=new UsersModel();
      $userData=$userModel->baseFind($selSql);
      if(count($userData)==0){
          $logMessage="查询用户权限操作出现异常,传入了user_id 但是数据库之中没有这个用户的信息";
          $this->putLog($logMessage,C("LOG_LEVEL_SELECT_USER_PREVELIDGE_EXCEPTION"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
          echo json_encode($retn);
          return ;
      }
      $userData=$userData[0];
      $selPreveSql=$this->produceSelectAllPrevelidge();
      $prevelidgeModel=new PrevelidgeModel();
      $preData=$prevelidgeModel->baseFind($selPreveSql);
      $preids=explode(",",$userData["prevelidge_id"]);
      $userGetPrevelidge=array();
      $userNotHavePrevelidge=array();
      foreach($preids as $k=>$v){
          for($i=0;$i<count($preData);$i++){
              if($v==$preData[$i]["prevelidge_id"]){
                   $userGetPrevelidge[$v]=$preData[$i]["prevelidge_desc"];
              }else{
                  $userNotHavePrevelidge[$preData[$i]["prevelidge_id"]]=$preData[$i]["prevelidge_desc"];
              }
          }
      }
      $this->assign("userId",$userData["id"]);
      $this->assign("username",$userData["useralis"]);
      $this->assign("userHas",$userGetPrevelidge);
      $this->assign("userNotHas",$userNotHavePrevelidge);
      $this->display("User/showUserPrevelidge");
      return ;
   }

   // 用户权限修改
   public function changeUserPrevelidge(){
         $userId=empty($_POST["user_id"])?0:intval($_POST["user_id"]);
         $userHas=empty($_POST["userHas"])?"":strval($_POST["userHas"]);
         $userNotHas=empty($_POST["userNotHas"])?"":strval($_POST["userNotHas"]);
         if($userId==0){
             $logMessage="修改用户权限出现异常，没有传入足够的参数";
             $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PREVELIDGE_EXCEPTION"));
             $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
             echo json_encode($retn);
             return ;
         }
        $can=$this->checkUserPrevelidges(C("CHANGE_OTHER_USERS_INFO"));
        if(!$can){
            $this->error("没有权限，快去和管理员沟通");
            return ;
        }
         $userModel=new UsersModel();
         $selSql=$this->produceSelectUserSql($userId);
         $userData=$userModel->baseFind($selSql);
         if(count($userData)==0){
             $logMessage="修改用户权限出现异常，传入了user_id,但是数据库之中没有这个用户";
             $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PREVELIDGE_EXCEPTION"));
             $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
             echo json_encode($retn);
             return ;
         }
         $userHas=substr($userHas,0,strlen($userHas)-1);
         $upDataSql=$this->produceUpdateUserPrevelidgeSql($userId,$userHas);
         $userModel->baseUpdate($upDataSql);
         $logMessage="修改用户权限成功";
         $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_USER_PREVELIDGE_EXCEPTION"));
         $retn=$this->getRetnArray(C("RETN_SUCCESS"),"用户修改权限成功");
         echo json_encode($retn);
         return ;

   }

   // 删除用户
   public function deleteUser(){
       $userId=empty($_POST["userId"])?0:intval($_POST["userId"]);
       if($userId==0){
           $logMessage="删除用户异常，没有传入user_id";
           $this->putLog($logMessage,C("LOG_LEVEL_DELETE_USER_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
           echo json_encode($retn);
           return ;
       }
       $userModel=new UsersModel();
       $selSql=$this->produceSelectUserSql($userId);
       $userData=$userModel->baseFind($selSql);
       if(count($userData)==0){
           $logMessage="删除用户异常，传入了user_id,但是数据库之中不存在这个用户";
           $this->putLog($logMessage,C("LOG_LEVEL_DELETE_USER_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem appear");
           echo json_encode($retn);
           return ;
       }
       $can=$this->checkUserPrevelidges(C( "DELETE_OTHER_USER"));
       if(!$can){
           $retn=$this->getRetnArray(C("RETN_ERROR"),"没有权限");
           echo json_encode($retn);
           return ;
       }
       if($_SESSION["user_id"]==$userId){
           $retn=$this->getRetnArray(C("RETN_ERROR"),"自己不能删除自己");
           echo json_encode($retn);
           return ;
       }
       $updateSql=$this->produceDeleteUserSql($userId);
       $userModel->baseUpdate($updateSql);
       $logMessage="删除用户操作成功";
       $this->putLog($logMessage,C("LOG_LEVEL_DELETE_USER"));
       $retn=$this->getRetnArray(C("RETN_SUCCESS"),"用户修改成功");
       echo json_encode($retn);
       return ;
   }

   // 添加用户
    public function showAddUser(){
        $can=$this->checkUserPrevelidges(C("ADD_OTHER_USER"));
        if(!$can){
            $this->error("没有权限，快去和管理员沟通");
            return ;
        }
        $selPrev=$this->produceSelectAllPrevelidge();
        $prevelidgeModel=new PrevelidgeModel();
        $prevData=$prevelidgeModel->baseFind($selPrev);
        $data=array();
        $i=0;
        $j=1;
        foreach($prevData as $k=>$v){
            if(empty($data[$i])){
                $data[$i]=array();
            }
            if($j%4==0){
                $j=1;
                $i+=1;
            }
            $data[$i][]=array("desc"=>$v["prevelidge_desc"],"id"=>$v["prevelidge_id"]);
            $j++;
        }
        $this->assign("prev",$data);
        $this->display("User/showAddUser");
        return ;
    }

    public function addUser(){
        $userName=empty($_POST["username"])?"":strval($_POST["username"]);
        $useraccount=empty($_POST["useraccount"])?"":strval($_POST["useraccount"]);
        $userRealName=empty($_POST["userRealName"])?"":strval($_POST["userRealName"]);
        $userHas=empty($_POST["userHas"])?"":strval($_POST["userHas"]);
        $can=$this->checkUserPrevelidges(C("ADD_OTHER_USER"));
        if(!$can){
            $logMessage="增加用户异常，用户没有增加用户的权限";
            $this->putLog($logMessage,C("LOG_LEVEL_ADD_USER_EXCEPTION"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"快点向管理员查询权限吧");
            echo json_encode($retn);
            return ;
        }
        if($userName==""||$useraccount==""||$userRealName==""){
            $logMessage="增加用户异常，没有传入足够的信息";
            $this->putLog($logMessage,C("LOG_LEVEL_ADD_USER_EXCEPTION"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem disappear");
            echo json_encode($retn);
            return ;
        }
        $userModel=new UsersModel();
        $selSql=$this->produceSelectUserAccountSql($useraccount);
        $userData=$userModel->baseFind($selSql);
        if(count($userData)!=0){
            $logMessage="增加用户异常，用户账号已经存在";
            $this->putLog($logMessage,C("LOG_LEVEL_ADD_USER_EXCEPTION"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"a problem disappear");
            echo json_encode($retn);
            return ;
        }
        $inst=array();
        $inst["username"]=$useraccount;
        $inst["real_name"]=$userRealName;
        $inst["useralis"]=$userName;
        $inst["useradded"]=$_SESSION["user_id"];
        $inst["user_add_date"]=getCurrentDate(C("DAY"));
        $inst["user_change_date"]=getCurrentDate(C("DAY"));
        $inst["password"]=encodePassword("123456");
        if($userHas!=""){
            $inst["prevelidge_id"]=substr($userHas,0,strlen($userHas)-1);
        }
        $insSql=$this->produceAddUserSql($inst);
        $userModel->baseUpdate($insSql);
        $logMessage="用户增加成功";
        $this->putLog($logMessage,C("LOG_LEVEL_ADD_USER"));
        $retn=$this->getRetnArray(C("RETN_SUCCESS"),"用户增加成功");
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

    private function produceSelectUserListSql(){
        $sql="select * from ".C("A00_USERS")." where `user_del`=0 ";
        return $sql;
    }

    private function  produceSelectPrevelidgeSql($prevelidgeIdList){
       $prevelidgeIdList="(".$prevelidgeIdList.")";
        $sql="select `prevelidge_desc` from ".C("A00_PREVELEDGES")." where `prevelidge_id` in ".$prevelidgeIdList;
        return $sql;
    }

    private function produceSelectAllPrevelidge(){
        $sql="select * from ".C("A00_PREVELEDGES");
        return $sql;
    }
    private function produceUpdateUserPrevelidgeSql($userId,$prevelidge){
        $sql="update ".C("A00_USERS")." set `prevelidge_id`='".$prevelidge."' where `id`=".$userId;
        return $sql;
    }
    private function produceDeleteUserSql($userId){
        $sql="update ".C("A00_USERS")." set `user_del`=0 where `id`=".$userId;
        return $sql;
    }

    private function produceSelectUserAccountSql($useraccount){
        $sql="select * from ".C("A00_USERS")." where `username`='".$useraccount."' and `user_del`=0";
        return $sql;
    }

    private function produceAddUserSql($data){
        $sql="insert into ".C("A00_USERS");
        $body="(";
        $end="values(";
        foreach($data as $k =>$v){
            $body.=$k.",";
            $end.="'".$v."',";
        }
        $body=substr($body,0,strlen($body)-1);
        $end=substr($end,0,strlen($end)-1);
        $body.=") ";
        $end.=") ";
        return $sql.$body.$end;
    }

}