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
        }
        $this->display("Priviledges/showPriviledgesList");
        return ;
    }

    private function produceSelectPrevelidgeListSql($pageId){
        $start=($pageId-1)*C("PAGE_SIZE");
        $sql="select * from ".C("A00_PREVELEDGES")." where `prevelidge_del`=0 order by prevelidge_id limit  ".$start."  ,".C("PAGE_SIZE");
        return $sql;
    }

}