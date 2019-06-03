<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/3
 * Time: 19:37
 */

namespace Admin\Model;

use Common\Model\BaseModel;
class ProductImageModel extends BaseModel
{
    public function  insert($sql){
        $this.$this->execute($sql);
    }
}