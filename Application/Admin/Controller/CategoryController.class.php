<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/5
 * Time: 19:42
 */

namespace Admin\Controller;
use Admin\Model\CategoriesModel;
use Admin\Model\UsersModel;
use Common\Controller\AdminLoginController;

class CategoryController extends AdminLoginController
{
   public function add(){
    $this->display("Category/add");
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
       $count = $categoriesModel->count();
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
}