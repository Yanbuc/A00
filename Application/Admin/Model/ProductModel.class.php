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
       "product_description"=>"productDescpription");


  // 插入数据
  public function insert($sql){
      $this->execute($sql);
  }

  public function find($sql){
      $retn=$this->execute($sql);
      return $retn;
  }
}