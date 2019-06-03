<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/2
 * Time: 17:06
 */

namespace Admin\Controller;
use Admin\Model\ProductImageModel;
use Admin\Model\ProductModel;
use Common\Controller\AdminLoginController;


class ClothesController extends AdminLoginController
{
   public function show(){
       $this->display("Clothes/add");
   }

   // 添加服装
   public function add(){

       header("Content-type:text/html;charset=utf-8");
       $retn=array();
       $data=$_POST;
       // 产品描述可以不传送过来
       if(empty($data["productId"])||empty($data["productAlis"])||empty($data["productPrice"])||empty($data["productType"])||empty($data["sex"])){
          $con=C("CHECK_MESSAGE");
          $retn["status"]="error";
          $retn["message"]="产品信息缺失: ";
          foreach($con as $k=>$v){
             $retn["message"] .=empty($datap[$k]) ?  $v:"";
          }
          echo json_encode($retn);
           return ;
       }
      $productId=$data["productId"];
      $productAlis=$data["productAlis"];
      $productPrice=$data["productPrice"];
      $productDescprition=$data["productDescpription"];
      $productType= $data["productType"];
      $sex=$data["sex"];
      $productModel=new ProductModel();
      $findSql=$this->findProductIdWhetherExists($productId);
      if($productModel->find($findSql)){
          $retn["status"]="error";
          $retn["message"]="产品编号已经存在";
          echo json_encode($retn);
          return ;
      }
      // 文件上传
      if(!empty($_FILES["img"])){
         $fileName=date("Y_m_d_His").".".explode(".",$_FILES["img"]["name"])[1];
         $tmpFileName=$_FILES["img"]["tmp_name"];
        if(!file_exists($fileName)){
            move_uploaded_file($tmpFileName,ADMIN_CLOTHES_PATH.$fileName);
            $productImageModel=new ProductImageModel();
            $picSql=$this->insertPicture($productId,$fileName);
            $productImageModel->insert($picSql);
         }
      }
      $sql=$this.$this->produceSql($productModel,$data);
      $productModel->insert($sql);
      $retn["status"]="success";
      $retn["message"]="产品信息插入成功";
      echo json_encode($retn);
      return ;

   }

   private function produceSql($productModel,$data){
       $sql="insert into ".C("A00_PRODUCT");
       $body=" ( ";
       $values=" values( ";
       $fields=$productModel->tableFields;
      if(empty($data["productDescpription"])){
          unset($fields["product_description"]);
      }
      $body.=(implode(",",array_keys($fields))." ) ");
      foreach($fields as $k=>$v){
          $values.="'".$data[$v]."'".",";
      }
      $values=trim($values,",");
       $values.=" ) ";
      return $sql.$body.$values;
   }

   private function findProductIdWhetherExists($id){
       $sql="select * from ".C("A00_PRODUCT")." where product_id = ".$id;
       return $sql;
   }
   private function insertPicture($productId,$pictureName){
       $sql="insert into ".C("A00_IMAGE_PATH")."  values(  ".$productId.","." ' ".$pictureName."'"." ) ";
       return $sql;
   }

}