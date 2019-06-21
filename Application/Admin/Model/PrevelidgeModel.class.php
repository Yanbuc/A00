<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/21
 * Time: 18:48
 */

namespace Admin\Model;
use Common\Model\BaseModel;

class PrevelidgeModel extends BaseModel
{
    public function getCount(){
        $sql="select * from  ".C("A00_PREVELEDGES")." where `prevelidge_del`=0 ";
        $data=$this->baseFind($sql);
        return count($data);
    }
}