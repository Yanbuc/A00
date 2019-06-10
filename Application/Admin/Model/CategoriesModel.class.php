<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/6
 * Time: 18:02
 */

namespace Admin\Model;
use Common\Model\BaseModel;

class CategoriesModel extends BaseModel
{
   public $tableFilds=array(
       "productName"=>"category_name",
       "productDescription"=>"category_desc",
       "category_date"=>"category_date",
       "category_add_owner"=>"category_add_owner",
       "category_change_date"=>"category_change_date");
   public function  getCount(){
       $sql="select * from a00_categories where category_del=0";
       $data=$this->query($sql);
       return count($data);
   }

}