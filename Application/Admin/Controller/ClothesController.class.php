<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/2
 * Time: 17:06
 */

namespace Admin\Controller;
use Common\Controller\AdminLoginController;


class ClothesController extends AdminLoginController
{
   public function show(){
       $this->display("Clothes/add");
   }

   // 添加服装
   public function add(){
      $data=$_POST;
      $productId=$data["productId"];
      $productAlis=$data["productAlis"];
      $productPrice=$data["productPrice"];
      $productDescprition=$data["productDescpription"];
      $productType= $data["productType"];
      $sex=$data["sex"];
      // 文件上传
      if(!empty($_FILES["img"])){
         $fileName=date("Y_m_d_His").".".explode(".",$_FILES["img"]["name"])[1];
         $tmpFileName=$_FILES["img"]["tmp_name"];
        if(!file_exists($fileName)){ // 这里的位置写死了
           $is= move_uploaded_file($tmpFileName,ADMIN_CLOTHES_PATH.$fileName);
         }
      }
     print($productId." ".$productAlis." ".$productPrice." ".$productDescprition." ". $productType." ".$sex);
   }
}