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
       if(empty($data["productAlis"])||empty($data["productType"])||empty($data["sex"])){
          $con=C("CHECK_MESSAGE");
          $retn["status"]="error";
          $retn["message"]="产品信息缺失: ";
          foreach($con as $k=>$v){
             $retn["message"] .=empty($datap[$k]) ?  $v:"";
          }
          echo json_encode($retn);
           return ;
       }
      $data["date"]=getCurrentDate(C("DATE"));
      $productAlis=$data["productAlis"];
      $productDescprition=$data["productDescpription"];
      $productType= $data["productType"];
      $sex=$data["sex"];
      $productModel=new ProductModel();
      $findSql=$this->findProductIdWhetherExists($productAlis);
      if($productModel->find($findSql)){
          $retn["status"]="error";
          $retn["message"]="产品编号已经存在";
          echo json_encode($retn);
          return ;
      }
      $sql=$this->produceSql($productModel,$data);
      $productModel->insert($sql);
      $find=$this->produceSelectProductIdByNameSql($productAlis);
      $pdData=$productModel->baseFind($find);
      $productId=$pdData[0]["product_id"];
       // 文件上传
       if(!empty($_FILES["img"])){
           $fileName=getCurrentDate(C("DATE")).".".explode(".",$_FILES["img"]["name"])[1];
           $tmpFileName=$_FILES["img"]["tmp_name"];
           if(!file_exists($fileName)){
               $fileName=trim($fileName);
               move_uploaded_file($tmpFileName,ADMIN_CLOTHES_PATH.$fileName);
               $productImageModel=new ProductImageModel();
               $picSql=$this->insertPicture($productId,$fileName);
               $productImageModel->insert($picSql);
           }
       }
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
       $sql="select * from ".C("A00_PRODUCT")." where product_name = '".$id."'";
       return $sql;
   }
   private function insertPicture($productId,$pictureName){
       $sql="insert into ".C("A00_IMAGE_PATH")."(`pid`,`image_path`)   values(  ".$productId.","." ' ".$pictureName."'"." ) ";
       return $sql;
   }

   // 分页显示所有产品
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
           if($v["product_price"]==0){
               $retn[$k]["product_price"]="产品尚未标价";
           }
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
       $imageSql="select * from  ".C("A00_IMAGE_PATH")." where pid=".$product." and `pic_del`=0";
       $imageModel=new ProductImageModel();
       $image=$imageModel->baseFind($imageSql);
       $data["image"]=array();
       $data["image_id"]=array();
       foreach ($image as $k=>$v){
           $data["image"][]=PUBLIC_PICTURE_PATH.trim($v["image_path"]);
           $data["image_id"][]=$v["pic_id"];
       }
       $numSql="select * from ".C("A00_PRODUCT_NUM")." where product_id=".$product." and `product_del`=0";
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
       $data["product_price"]=$data["product_price"]==0?"产品尚未标价":$data["product_price"];
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
       if(empty($data["productId"])||empty($data["productName"])||empty($data["productPrice"])||empty($data["productType"])){
              $retn=$this->getRetnArray(C("RETN_ERROR"),"缺乏必要的信息 ");
              $retn["message"].=empty($data["productId"])?"没有输入产品编号 ":"";
              $retn["message"].=empty($data["productName"])?"没有输入产品名字 ":"";
              $retn["message"].=empty($data["productPrice"])?"没有输入产品价格 ":"";
              $retn["message"].=empty($data["productType"])?"没有输入产品类型 ":"";
              $retn["message"].=empty($data["productSex"])?"没有输入产品性别":"";
              echo json_encode($retn);
              return ;
       }
       $sql=$this->produceSelectProductSql($data["productId"]);
       $productModel=new ProductModel();
       $pdata=$productModel->baseFind($sql);
       if(count($pdata)==0){
           $logMessage="Admin ClothesController changProduct 传入了ProductId 但是数据库之中不存在";
           $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_PRODUCT_EXCEPTION"));
           $retn=$this->getRetnArray(C("RETN_ERROR"),"you are a silly boy !!!!!");
           echo json_encode($retn);
           return ;
       }
       $pdata=$pdata[0];
       // 删除图片
       if(!empty($data["productImage"])){
           $ids=explode(";",trim($data["productImage"],";"));
           $deleteSql=$this->produceDeleteProductImageSql($ids);
           $imageModel=new ProductImageModel();
           $imageModel->baseUpdate($deleteSql);
           $logMessage="Admin ClothesController changProduct 删除".$data["productName"]."图片";
           $this->putLog($logMessage,C("LOG_LEVEL_NORMAL"));
       }
       $productName=strval($data["productName"]);
       $productNum=intval($data["productNum"]);
       $productId=intval($data["productId"]);
       $productType=intval($data["productType"]);
       $productPrice=doubleval($data["productPrice"])==0.0?0:doubleval($data["productPrice"]);
       $productSex=intval($data["productSex"]);
       if(!empty($productNum)||$productNum!=0){
          $numSql=$this->produceSelectProductNumSql($productId);
          $numModel=new ProductNumModel();
          $num=$numModel->baseFind($numSql);
           $tmp=array();
           $tmp["product_id"]=$productId;
           $tmp["product_num"]=$productNum;
           $tmp["product_change_date"]=date("Y/m/d_H:i:s");
          if(count($num)==0){
              $tmp["product_add_date"]=date("Y/m/d_H:i:s");
              $addNumSql=$this->produceInsertProductNumSql($tmp);
              $numModel->baseInsert($addNumSql);
              $logMessage="Admin ClothesController changProduct 添加了产品".$productName."的数量，数量为".$productNum;
              $this->putLog($logMessage,C("LOG_LEVEL_INSERT_PRODUCT_NUM"));
          }else{
              $num=$num[0];
              $numDelSql=$this->produceDeleteProductNumSql($num);
              $numModel->baseUpdate($numDelSql);
              $numInsSql=$this->produceInsertProductNumSql($tmp);
              $numModel->baseInsert($numInsSql);
              $logMessage="Admin ClothesController changProduct 更新了产品".$productName."的数量，数量为".$productNum;
              $this->putLog($logMessage,C("LOG_LEVEL_CHANGE_PRODUCT_NUM"));
          }
       }

       $updateProductData=array();
       if($pdata["product_name"]!=$productName){
           $updateProductData["product_name"]=$productName;
       }
       if($pdata["product_type"]!=$productType){
           $updateProductData["product_type"]=$productType;
       }
       if($pdata["product_price"]!=$productPrice){
           $updateProductData["product_price"]=$productPrice;
       }
       if($pdata["product_sex"]!=$productSex){
           $updateProductData["product_sex"]=$productSex;
       }
       if(!empty($data["productDesc"])&& trim($data["productDesc"])!=$pdata["product_description"]){
           $updateProductData["product_description"]=strval($data["productDesc"]);
       }
       if(!empty($updateProductData)){
           $updateProductData["product_update_date"]=date("Y/m/d_H:i:s");
           $updateSql=$this->produceUpdateProductSql($productId,$updateProductData);
           $productModel->baseUpdate($updateSql);
           $logMessage="Admin ClothesController changProduct 更新了产品".$productName."的信息";
           $this->putLog($logMessage,C("LOG_LEVEL_UPDATE_PRODUCT_INFOR"));
       }
       $retn=$this->getRetnArray(C("RETN_SUCCESS"),"产品信息修改成功");
       echo json_encode($retn);
       return ;
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
   private function  produceUpdateProductSql($productId,$data){
       $sql="update ".C("A00_PRODUCT")." set  ";
       $body="";
       foreach($data as $k=>$v){
           $body.=$k."='".$v."',";
       }
       $body=trim($body,",");
       $end=" where product_id=".$productId;
       $sql=$sql.$body.$end;
       return $sql;
   }
   private function produceSearchProductImageSql($productId){
       $sql="select * from ".C("A00_IMAGE_PATH")." where pid=".$productId." and `pic_del`=0";
       return $sql;
   }
   private function produceDeleteProductImageSql($ids){
       $ids=implode(",",$ids);
       $ids=trim($ids,",");
       $ids="(".$ids.")";
       $sql="update ".C("A00_IMAGE_PATH")." set `pic_del`=1 where `pic_id` in ".$ids;
       return $sql;
   }
   private function produceSelectProductNumSql($productId){
       $sql="select * from ".C("A00_PRODUCT_NUM")."  where `product_id`=".$productId."  and `product_del`=0";
       return $sql;
   }

   private function produceInsertProductNumSql($data){
       $body="(";
       $end="values(";
       foreach($data as $k=>$v){
           $body.=$k.",";
           $end.="'".$v."',";
       }
       $body=trim($body,",").")";
       $end=trim($end,",").")";
       $sql=" insert into ".C("A00_PRODUCT_NUM")."  ".$body.$end;
       return $sql;
   }
   private function produceDeleteProductNumSql($data){
       $sql="update ".C("A00_PRODUCT_NUM")." set `product_del`=1  where `num_id`=".$data["num_id"];
       return $sql;
   }

   private function  produceSelectProductIdByNameSql($productName){
       $sql="select * from ".C("A00_PRODUCT")." where product_name='".$productName."'" ;
       return $sql;
   }

}