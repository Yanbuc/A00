<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/2
 * Time: 17:06
 */

namespace Admin\Controller;
use Admin\Model\CategoriesModel;
use Admin\Model\ProductImageModel;
use Admin\Model\ProductModel;
use Admin\Model\ProductNumModel;
use Admin\Model\LogModel;
use Common\Controller\AdminLoginController;


class ClothesController extends AdminLoginController
{
   public function show(){
       $categoryModel=new CategoriesModel();
       $findSql=$this->produceSearchCategorySql();
       $data=$categoryModel->baseFind($findSql);
       $this->assign("data",$data);
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
       $findCategorySql=$this->produceSearchCategoryInList($data);
       $categoryModel=new CategoriesModel();
       $categoryData=$categoryModel->baseFind($findCategorySql);
       $caData=array();
       foreach($categoryData as $k=>$v){
           $caData[$v["category_id"]]=$v;
       }
       $retn=array();
       foreach($data as $k=>$v){
           $v["category_name"]=$caData[$v["product_type"]]["category_del"]==0?$caData[$v["product_type"]]["category_name"]:$caData[$v["product_type"]]["category_name"]."(已被删除)";
           $retn[]=$v;
       }
       foreach ($retn as $k=>$v){
           if($v["product_sex"]==1){
               $retn[$k]["product_real_sex"]="男装";
           }else if($v["product_sex"]==2){
               $retn[$k]["product_real_sex"]="女装";
           }else{
               $retn[$k]["product_real_sex"]="通用";
           }
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
       $cateSql="select * from ".C("A00_CATEGORY")." where category_del=0 ";
       $categoryModel=new CategoriesModel();
       $res=$categoryModel->baseFind($cateSql);
       foreach ($res as $k=>$v){
           if($res[$k]["category_id"]==$data["product_type"]){
               $res[$k]["real"]=1;
           }else{
               $res[$k]["real"]=0;
           }
       }
       $data["category"]=$res;
       $data["num"]=empty($num)?"产品还没有填写数量":$num[0]["product_num"];
       $this->showProductDetail($data);
   }

   public function showProductDetail($data){
       $this->assign("data",$data);
       $this->assign("image",$data["image"]);
       $this->assign("image_id",$data["image_id"]);
       $this->assign("category_ids",$data["category"]);
       $this->display("Clothes/showProductDetail");
   }

   public function changeProduct(){
       $data=$_POST;
       if(empty($data["productId"])||empty($data["productName"])||empty($data["productPrice"])||empty($data["productType"])||empty($data["productImage"])){
              $retn=$this->getRetnArray(C("RETN_ERROR"),"缺乏必要的信息");
              echo json_encode($retn);
              return ;
       }
   }

   // 删除产品
    public function deleteProduct(){
       $logModel=new LogModel();
       if(empty($_POST["product_id"])){
           $logMessage="删除产品出现异常，传入的时候没有product_id";
           $logMessage=getLogMessage($logMessage);
           $logLevel=C("LOG_LEVEL_PRODUCT_DELETE_EXCEPTION");
           $logDate=date("Y_m_d_H:i:s");
           $logModel->insertLog($logLevel,$logMessage,$logDate);
           $retn=$this->getRetnArray(C("RETN_ERROR"),"没有足够的输入信息");
           echo json_encode($retn);
           return ;
       }
       $productId=intval($_POST["product_id"]);
       $produceModel=new ProductModel();
       $findSql=$this->produceSelectProductSql($productId);
       $data=$produceModel->baseFind($findSql);
       if(count($data)==0){
           $logMessage="删除产品出现异常，传入了product_id，但是数据库之中没有这个product_id,需要检查";
           $logMessage=getLogMessage($logMessage);
           $logLevel=C("LOG_LEVEL_PRODUCT_DELETE_EXCEPTION");
           $logDate=date("Y_m_d_H:i:s");
           $logModel->insertLog($logLevel,$logMessage,$logDate);
           $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy!!!!");
           echo json_encode($retn);
           return ;
       }
       $deleteSql=$this->produceDeleteProduct($productId);
       $produceModel->baseUpdate($deleteSql);
       $retn=$this->getRetnArray(C("RETN_SUCCESS"),"产品删除成功");
        echo json_encode($retn);
        return ;
    }

    public function showUploadImage(){
      $productId=intval($_GET["product_id"]);
      if($productId==0){
          $logMessage="上传异常,传入的产品id 不正确";
          $this->putLog($logMessage,C( "LOG_LEVEL_NORMAL"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy!!!!");
          echo json_encode($retn);
          return ;
      }
      $productModel=new ProductModel();
      $sql=$this->produceSelectProductSql($productId);
      $data=$productModel->baseFind($sql);
      if(count($data)==0){
          $logMessage="传入了product_id,但是数据库之中没有";
          $this->putLog($logMessage,C( "LOG_LEVEL_NORMAL"));
          $retn=$this->getRetnArray(C("RETN_ERROR"),"淘气的宝宝");
          echo json_encode($retn);
          return ;
      }
      $data=$data[0];
      $imageModel=new ProductImageModel();
      $findSql=$this->produceSearchProductImageSql($productId);
      $image=$imageModel->baseFind($findSql);
      if(count($image)!=0){
          $image=dealImagePath($image);
      }
      $this->assign("image",$image);
      $this->assign("data",$data);
      $this->display("Clothes/showUploadImage");
    }

     // 上传图片
    public function uploadImage(){
        $data=$_POST;
        if(empty($data["productId"])){
            $logMessage="传入的数据缺失,没有product_id";
            $this->putLog($logMessage, C("LOG_LEVEL_NORMAL"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"传入数据缺失");
            echo json_encode($retn);
            return ;
        }
        if(empty($_FILES["img"])){
            $retn=$this->getRetnArray(C("RETN_ERROR"),"没有上传图片");
            echo json_encode($retn);
            return ;
        }
        $tmp=$this->produceSelectProductSql($data["productId"]);
        if(count($tmp)==0){
            $logMessage="Clothes uploadImage 传入了product_id，但是数据库之中不存在";
            $this->putLog($logMessage, C("LOG_LEVEL_NORMAL"));
            $retn=$this->getRetnArray(C("RETN_ERROR"),"传入数据缺失");
            echo json_encode($retn);
            return ;
        }
        $fileName=trim(date("Y_m_d_His").".".explode(".",$_FILES["img"]["name"])[1]);
        $tmpFileName=$_FILES["img"]["tmp_name"];
        if(!file_exists($fileName)){
            $fileName=trim($fileName);
            move_uploaded_file($tmpFileName,ADMIN_CLOTHES_PATH.$fileName);
            $productImageModel=new ProductImageModel();
            $sql="insert into ".C("A00_IMAGE_PATH")."(`pid`,`image_path`)  values(".$data["productId"].", '".$fileName."')";
            $productImageModel->baseInsert($sql);
            $retn=$this->getRetnArray(C("RETN_SUCCESS"),"文件上传成功");
            echo json_encode($retn);
            return ;
        }
        $retn=$this->getRetnArray(C("RETN_ERROR"),"文件上传失败");
        echo json_encode($retn);
        return ;
    }

   private function produceSearchCategorySql(){
       $sql="select * from ".C("A00_CATEGORY")." where category_del=0";
       return $sql;
   }
   private function produceSearchCategoryInList($data){
       $ids=array();
       foreach($data as $k=>$v){
           $ids[]=$v["product_type"];
       }
       $idlist=implode($ids,",");
       $sql="select * from ".C("A00_CATEGORY")." where category_id in (".$idlist.")";
       return $sql;
   }
   private function produceSelectProductSql($productId){
       $sql="select * from ".C("A00_PRODUCT")." where product_id=".$productId." and product_del=0 ";
       return $sql;
   }
   private function  produceDeleteProduct($productId){
       $sql="update ".C("A00_PRODUCT")." set `product_del`=1  where `product_id`=".$productId;
       return $sql;
   }
   private function produceSearchProductImageSql($productId){
       $sql="select * from ".C("A00_IMAGE_PATH")." where pid=".$productId;
       return $sql;
   }

}