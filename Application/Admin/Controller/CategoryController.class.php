<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/5
 * Time: 19:42
 */

namespace Admin\Controller;
use Admin\Model\CategoriesModel;
use Admin\Model\LogModel;
use Admin\Model\UsersModel;
use Common\Controller\AdminLoginController;

class CategoryController extends AdminLoginController
{
   public function add(){
    $this->display("Category/add");
     return ;
   }

   public function addCategory(){
       $data=$_POST;
       $check=C("CATEGORY_CHECK");
       $retn=array("status"=>"","message"=>"");
       foreach ($check as $k=>$v) {
            if(empty($data[$k])){
                $retn["status"]="error";
                $retn["message"].=$v."  ";
            }
       }
       if($retn["status"]=="error"){
            echo json_encode($retn);
           return ;
       }
       $categoryModel=new CategoriesModel();
       $findSql=$this->productCheckCategoryExistsSql($data["productName"]);
       $res=$categoryModel->baseFind($findSql);

       if(count($res)>0){
           $retn["status"]=C("RETN_ERROR");
           $retn["message"]=C("CATEGORY_TIP");
           echo json_encode($retn);
           return ;
       }
       $data["category_date"]=date("Y_m_d_H:i:s");
       $data["category_change_date"]=$data["category_date"];
       $data["category_add_owner"]=$_SESSION["username"];
       $sql=$this->produceInsertCategorySql($data,$categoryModel->tableFilds);
       $categoryModel->baseInsert($sql);
       $retn["status"]="success";
       $retn["message"]="类别添加成功";
       echo json_encode($retn);
       return ;

   }

   public function showCatgeoryList(){

       $pid=$_GET["p"];
       if(empty($pid)){
           $pid=1;
       }
       $categoriesModel=new CategoriesModel();
       $usersModel=new UsersModel();
       $pageSize = C("PAGE_SIZE");
       $count = $categoriesModel->getCount();
       if($pageSize*($pid-1)>$count){
           $pid=1;
       }
       $p = getPage($count, $pageSize);
       $findSql=$this->productSearchCaetgorySql($pid,$pageSize);
       $categoryData=$categoriesModel->baseFind($findSql);
       $findUserSql=$this->produceSearchUsersSql();
       $usersData=$usersModel->baseFind($findUserSql);
       $users=array();
       foreach($usersData as $k=>$v){
           $users[$v["username"]]=$v["real_name"];
       }
       foreach($categoryData as$k=>$v){
           $categoryData[$k]['realName']=$users[$v["category_add_owner"]];
       }
       if(empty($data["category_desc"])||$data["category_desc"]==""){
           $data["category_desc"]="没有类别描述信息";
       }
       $this->assign("data",$categoryData);
       $this->assign("show",$p->show());
       $this->display("Category/showCategoryList");
   }

   // 改变种类
    public function changeCategory(){
       $category_id=intval($_GET["product_id"]);
       $retn=C("RETN_ARRAY");
       if(empty($category_id)){
          $retn["status"]=C("RETN_ERROR");
          $retn["message"]="没有输入产品编号无法查询";
          echo json_encode($retn);
          return ;
       }
       $sql=$this->produceSelectCategorySql($category_id);
       $categoryModel=new CategoriesModel();
       $data=$categoryModel->baseFind($sql);
       if(count($data)==0||empty($data)){
           $retn["status"]=C("RETN_ERROR");
           $retn["message"]="输入的产品id不正确";
           echo json_encode($retn);
           return ;
       }
       $data=$data[0];
       $this->assign("data",$data);
       $this->display("Category/changeCategory");
    }

    public function submitChangeCategory(){
        $data=$_POST;
        $checkFileds=C("CHECK_CATEGORY_UPDATE_FIELDS");
        $retn=$retn=C("RETN_ARRAY");
        foreach($checkFileds as $k=>$v){
            if(empty($data[$k])){
                $retn["status"]=C("RETN_ERROR");
                $retn["message"].=$v."  ";
            }
        }
        $logModel=new LogModel();
        if($retn["status"]==C("RETN_ERROR")){
            $logMessage="修改类别请求出现异常";
            $logMessage=getLogMessage($logMessage);
            $logLevel=C("LOG_LEVEL_CATEGORY_CHANGE_EXCEPTION");
            $logDate=date("Y_m_d_H:i:s");
            $logModel->insertLog($logLevel,$logMessage,$logDate);
            echo json_encode($retn);
            return ;
        }
        $findSql=$this->produceSelectCategorySql($data["category_id"]);
        $categoryModel=new CategoriesModel();
        $search=$categoryModel->baseFind($findSql);
        if(count($search)==0){
            $logMessage="修改类别请求出现异常,请求的category_id不存在于数据库之中";
            $logMessage=getLogMessage($logMessage);
            $logLevel=C("LOG_LEVEL_CATEGORY_CHANGE_EXCEPTION");
            $logDate=date("Y_m_d_H:i:s");
            $logModel->insertLog($logLevel,$logMessage,$logDate);
            $retn["status"]=C("RETN_ERROR");
            $retn["message"]="you are a bad boy!!!";
            echo json_encode($retn);
            return ;
        }
        $search=$search[0];
        $update=array();
        if($search["category_name"]!=$data["category_name"]){
            $update["category_name"]=$data["category_name"];
        }
        if($search["category_desc"]!=$data["category_desc"]){
            $update["category_desc"]=$data["category_desc"];
        }
        if(empty($update)){
            $retn["status"]=C("RETN_SUCCESS");
            $retn["message"]="没有改变的信息,类别不更新";
            echo json_encode($retn);
            return ;
        }
        $updateSql=$this->produceUpdateCategorySql($data["category_id"],$update);
        $categoryModel->baseUpdate($updateSql);
        $retn=$this->getRetnArray(C("RETN_SUCCESS"),"类别修改成功");
        echo json_encode($retn);
        return ;
    }

    public function deleteCategory(){
        $data=$_POST;
        $retn=array();
        $logModel=new LogModel();
        $categoryModel=new CategoriesModel();
        if(empty($data["category_id"])){
            $retn=$this->getRetnArray(C("RETN_ERROR"),"产品数据编号传入缺失");
            $logMessage="删除类别请求出现异常,没有需要删除的类别编号";
            $logMessage=getLogMessage($logMessage);
            $logLevel=C("LOG_LEVEL_CATEGORY_DELETE_EXCEPTION");
            $logDate=date("Y_m_d_H:i:s");
            $logModel->insertLog($logLevel,$logMessage,$logDate);
            echo json_encode($retn);
            return ;
        }
        $categoryId=$data["category_id"];
        $findSql=$this->produceSelectCategorySql($categoryId);
        $data=$categoryModel->baseFind($findSql);
        if(count($data)<=0){
            $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a inererting boy !!!!");
            $logMessage="删除类别请求出现异常,传入了类别编号，但是数据库之中不存在";
            $logMessage=getLogMessage($logMessage);
            $logLevel=C("LOG_LEVEL_CATEGORY_DELETE_EXCEPTION");
            $logDate=date("Y_m_d_H:i:s");
            $logModel->insertLog($logLevel,$logMessage,$logDate);
            echo json_encode($retn);
            return ;
        }
        $deleteSql=$this->produceDeleteCategorySql($categoryId);
        $categoryModel->baseUpdate($deleteSql);
        $logMessage="类别被删除";
        $logMessage=getLogMessage($logMessage);
        $logLevel=C("LOG_LEVEL_NORMAL");
        $logDate=date("Y_m_d_H:i:s");
        $logModel->insertLog($logLevel,$logMessage,$logDate);
        $retn= $this->getRetnArray(C("RETN_SUCCESS"),"类别删除成功");
        echo json_encode($retn);
        return ;

    }


   // 插入的sql语句
   private function produceInsertCategorySql($data,$fields){
       $sql="insert into ".C("A00_CATEGORY");
       $body=" (";
       $value=" values(";
       foreach($fields as $k=>$v){
           if(!empty($data[$k])){
               $body.=($v.",");
               $value.="'".$data[$k]."'".",";
           }
       }
       $body=trim($body,",").") ";
       $value=trim($value,",").") ";
       $sql=$sql.$body.$value;
       return $sql;
   }

   private function productCheckCategoryExistsSql($data){
       $sql="select * from ".C("A00_CATEGORY")." where category_name='".$data."' and category_del=0";
       return $sql;
  }

   private function productSearchCaetgorySql($pid,$pageSize){
       $start=($pid-1)*$pageSize;
       $sql="select * from ".C("A00_CATEGORY")." where category_del=0 order by category_id limit  ".$start.",".$pageSize;
       return $sql;
   }
   private function produceSearchUsersSql(){
      $sql="select username,real_name from  ".C("A00_USERS");
      return $sql;
   }
   private function produceSelectCategorySql($category_id){
       $sql="select * from ".C("A00_CATEGORY")." where category_id=".$category_id." and category_del=0 ";
       return $sql;
   }
   private function produceUpdateCategorySql($category_id,$data){
       $sql="update ".C("A00_CATEGORY")." set ";
       $body="";
       foreach($data as $k=>$v){
           $body.=($k."='".$v."',");
       }
       $body=trim($body,",");
       $end=" where  category_id=".$category_id;
       $sql=$sql.$body.$end;
       return $sql;
   }
   private function produceDeleteCategorySql($category_id){
       $sql="update ".C("A00_CATEGORY")." set category_del=1 where category_id= ".$category_id;
       return $sql;
   }


}