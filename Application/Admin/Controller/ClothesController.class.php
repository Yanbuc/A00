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
use Admin\Model\ProductNumModel;
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
      $data["date"]=date("Y/m/d_H:i:s");
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
            $fileName=trim($fileName);
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
       $sql="insert into ".C("A00_IMAGE_PATH")."(`pid`,`image_path`)   values(  ".$productId.","." ' ".$pictureName."'"." ) ";
       return $sql;
   }

   public function showProduct(){
       $pid=$_GET["p"];
       if(empty($pid)){
           $pid=1;
       }
       $productModel=new ProductModel();
       $pageSize = C("PAGE_SIZE");
       $count = $productModel->getCount();
       if($pageSize*($pid-1)>$count){
           $pid=1;
       }
       $p = getPage($count, $pageSize);
       $sql=$this->findSql($pid,$pageSize);
       $data=$productModel->find($sql);
       $retn=array();
       foreach($data as $k=>$v){
          $retn[]=$v;
       }
       $this->assign("data",$retn);
       $this->assign("show",$p->show());
       $this->display("Clothes/showProduct");
   }

   private function findSql($pid,$pageSize){
       $start=($pid-1)*$pageSize;
       $end=$pid*$pageSize;
       $sql="select * from ".C("A00_PRODUCT")." where product_del=0 order by product_id  limit ".$start." ,".$pageSize;
       return $sql;
   }
   // 要查询的东西有 产品名字 产品数量 产品的描述 产品的图片
   public function getProductFullInformation(){
       $retn=array("status"=>"","message"=>"");
       $product=intval($_GET["product_id"]);
       $sql="select * from ".C("A00_PRODUCT")." where product_id= ".$product." and product_del=0";
       $productModel=new ProductModel();
       $data=$productModel->find($sql);
       if(empty($data)){
           $retn["status"]="error";
           $retn["message"]="没有这个产品编号";
           echo json_encode($retn);
           return ;
       }
       $data=$data[0];
       if(empty($data["product_description"])|| $data["product_description"]==""){
           $data["product_description"]="产品没有简介";
       }
       $imageSql="select * from  ".C("A00_IMAGE_PATH")." where pid=".$product;
       $imageModel=new ProductImageModel();
       $image=$imageModel->baseFind($imageSql);
       $data["image"]=array();
       $data["image_id"]=array();
       foreach ($image as $k=>$v){
           $data["image"][]=PUBLIC_PICTURE_PATH.trim($v["image_path"]);
           $data["image_id"][]=$v["pic_id"];
       }
       $numSql="select * from ".C("A00_PRODUCT_NUM")." where product_id=".$product;
       $numModel=new ProductNumModel();
       $num=$numModel->baseFind($numSql);
       $data["num"]=empty($num)?"产品还没有填写数量":$num[0]["product_num"];
       $this->showProductDetail($data);
   }

   public function showProductDetail($data){
       $this->assign("data",$data);
       $this->assign("image",$data["image"]);
       $this->assign("image_id",$data["image_id"]);
       $this->display("Clothes/showProductDetail");
   }


}