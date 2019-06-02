<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 12:06
 */
namespace  Admin\Model;
use Common\Model\BaseModel;
class UsersModel extends BaseModel
{
    public function update($tableName,$data){
        $sql="update  ".$tableName."   set `password` ='".$data["password"]."'  where  `username` ='".$data["username"]."' ";
       // $sql="update a00_users set password='96e79218965eb72d' where username='aaa' ";
        $this->execute($sql);
    }
}