<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/21
 * Time: 18:38
 */

namespace Admin\Controller;
use Admin\Model\PrevelidgeModel;
use Admin\Model\UsersModel;
use Common\Controller\AdminLoginController;

class PriviledgesController extends AdminLoginController
{
    public function showPriviledgesList(){
        $can=$this->checkUserPrevelidges(C("SELECT_PREVELIDGE_PREVELEDGE"));
        if(!$can){
            $this->error("没有权限，快去和管理员沟通");
            return ;
        }
        $pid=$_GET["p"];
        if(empty($pid)){
            $pid=1;
        }
        $previledgesModel=new PrevelidgeModel();
        $pageSize = C("PAGE_SIZE");
        $count = $previledgesModel->getCount();
        if($pageSize*($pid-1)>$count){
            $pid=1;
        }
        $p = getPage($count, $pageSize);
        $selSql=$this->produceSelectPrevelidgeListSql($pid);
        $preData=$previledgesModel->baseFind($selSql);
        if(count($preData)!=0){
            $this->assign("data",$preData);
            $this->assign("show",$p->show());
        }
        $this->display("Priviledges/showPriviledgesList");
        return ;
    }

    public function showSinglePriviledge(){
        $can=$this->checkUserPrevelidges(C("SELECT_PREVELIDGE_PREVELEDGE"));
        if(!$can){
            $this->error("没有权限，快去和管理员沟通");
            return ;
        }
        $prevelidgeId=intval($_GET["prevelidgeId"]);
        if($prevelidgeId==0){
            $logMessage="查询权限异常，有查询的权限,但是传入的权限的id式错误的";
            $this->putLog($logMessage,C( "LOG_LEVEL_SELECT_PREVELIDGE_EXCEPTION"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy!!!!");
            echo json_encode($retn);
            return ;
        }
        $sel=array();
        $sel["prevelidge_id"]=$prevelidgeId;
        $findSql=$this->produceSelectPrevelidgeSql($sel);
        $prevelidgeModel=new PrevelidgeModel();
        $prevelidgeData=$prevelidgeModel->baseFind($findSql);
        if(count($prevelidgeData)==0){
            $logMessage="查询权限异常，有查询的权限,但是数据库之中没有权限信息";
            $this->putLog($logMessage,C("LOG_LEVEL_SELECT_PREVELIDGE_EXCEPTION"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy!!!!");
            echo json_encode($retn);
            return ;
        }
        $prevelidgeData=$prevelidgeData[0];
        if($prevelidgeData["prevelidge_add_user"]==0){
            $prevelidgeData["prevelidge_add_user"]="系统固定权限";
        }else{
            $userData["id"]=$prevelidgeData["prevelidge_add_user"];
            $userSql=$this->produceSelectUserInfo($userData);
            $userModel=new UsersModel();
            $data=$userModel->baseFind($userSql);
            $prevelidgeData["prevelidge_add_user"]=$data[0]["real_name"];
        }
        $this->assign("prevelidgeData",$prevelidgeData);
        $retn=$this->getRetnArray(C("RETN_SUCCESS"),"查询信息成功");
        $this->display("Priviledges/showSinglePriviledge");
        return ;
    }

    // 改变权限的描述信息
    public function changePrevelidgeDesc(){
       $data=$_POST;
       $unchangeAblePrevelidge=explode(",",C("UNCHANEGEABLE_PREVELIDGE"));
       $prevelidgeId=intval($data["prevelidgeId"]);
       $prevelidgeDesc=strval($data["prevelidgeDesc"]);
       if(empty($prevelidgeId)||$prevelidgeId==0){
           $logMessage="修改权限异常，没有prevelidge_id";
           $this->putLog($logMessage,C( "LOG_LEVEL_CHANGE_PREVELIDGE_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy!!!!");
           echo json_encode($retn);
           return ;
       }
       foreach ($unchangeAblePrevelidge as $k=>$v){
           if($v==$prevelidgeId){
               $logMessage="修改权限失败，修改的权限是系统固定权限";
               $this->putLog($logMessage,C( "LOG_LEVEL_CHANGE_PREVELIDGE_EXCEPTION"));
               $retn=$this->getRetnArray(C("RETN_ERROR"),"系统权限无法修改");
               echo json_encode($retn);
               return ;
           }
       }
       $searchData=array();
       $searchData["prevelidge_id"]=$prevelidgeId;
       $searchSql=$this->produceSelectPrevelidgeSql($searchData);
       $prevelidgeModel=new PrevelidgeModel();
       $preData=$prevelidgeModel->baseFind($searchSql);
       if(count($preData)==0){
           $logMessage="修改权限失败，传入了prevelidge_id,但是数据库之中没有这个prevelidge_id";
           $this->putLog($logMessage,C( "LOG_LEVEL_CHANGE_PREVELIDGE_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy");
           echo json_encode($retn);
           return ;
       }
       $preData=$preData[0];
       if($preData["prevelidge_desc"]!=$prevelidgeDesc){
           $upData=array();
           $upData["prevelidge_desc"]=$prevelidgeDesc;
           $updateSql=$this->produceUpdatePrevelidgeSql($prevelidgeId,$upData);
           $prevelidgeModel->baseUpdate($updateSql);
           $logMessage="修改权限成功";
           $this->putLog($logMessage,C( "LOG_LEVEL_CHANGE_PREVELIDGE"));
       }
        $retn=$this->getRetnArray(C("RETN_SUCCESS"),"修改权限成功");
        echo json_encode($retn);
        return ;
    }





    private function produceSelectPrevelidgeListSql($pageId){
        $start=($pageId-1)*C("PAGE_SIZE");
        $sql="select * from ".C("A00_PREVELEDGES")." where `prevelidge_del`=0 order by prevelidge_id limit  ".$start."  ,".C("PAGE_SIZE");
        return $sql;
    }

    //
    private function produceSelectPrevelidgeSql($data){
        $sql="select * from ".C("A00_PREVELEDGES");
        $body=" where ";
        foreach ($data as $k=>$v){
           $body.=$k."=".$v."";
        }
        return $sql.$body;

    }

    private function produceSelectUserInfo($data){
        $sql="select * from ".C("A00_USERS");
        $body=" where ";
        foreach ($data as $k=>$v){
            $body.=$k."=".$v;
        }
        return $sql.$body;
    }

    private function produceUpdatePrevelidgeSql($prevelidgeId,$data){
        $sql=" update  ".C("A00_PREVELEDGES")." set  " ;
        $body="  where `prevelidge_id`=".$prevelidgeId;
        foreach ($data as $k=>$v){
            $sql.= $k."='".$v."',";
        }
        $sql=substr($sql,0,strlen($sql)-1);
        return $sql.$body;
    }
}