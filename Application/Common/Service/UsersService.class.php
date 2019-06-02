<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 12:13
 */
namespace Common\Service;
use Admin\Model\UsersModel;

class UsersService
{
     private $userModel;
     private $tableName;
     public function __construct()
     {
         $this->tableName="a00_users";
         $this->userModel=new UsersModel();
     }

     public function  getUserDataByUserId(){
         return  $this->userModel->select("a00_users",1);
     }

     public function getUserDataByUserName($data){
         $da=array("username"=>$data);
         return $this->userModel->select($this->tableName,$da);
     }

     public function updateUserByUserName($data){
         return $this->userModel->update($this->tableName,$data);
     }
}