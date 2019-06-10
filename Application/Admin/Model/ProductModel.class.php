<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/3
 * Time: 18:13
 */

namespace Admin\Model;

use Common\Model\BaseModel;
class ProductModel extends BaseModel
{
   public $tableFields=array("product_id"=>"productId",
       "product_type"=>"productType",
       "product_name"=>"productAlis",
       "product_price"=>"productPrice",
       "product_sex"=>"sex",
       "product_description"=>"productDescpription",
       "product_date"=>"date");


  // 插入数据
  public function insert($sql){
      $this->execute($sql);
  }

  public function find($sql){
     $data=$this->query($sql);
     return $data;
  }
  public function getCount(){
      $sql="select * from ".C("A00_PRODUCT" )." where product_del=0 ";
      $data= $this->query($sql);
      return count($data);
  }

}