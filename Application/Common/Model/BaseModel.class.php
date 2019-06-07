<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 12:07
 */
namespace Common\Model;
use \Think\Model ;
class BaseModel extends Model
{
       public function selectByUserId($table,$userId){
           $sql="select * from  ".$table."  where `id`=".$userId;
           echo $sql;
           $data= $this->query($sql);
           return $data;
       }
       public function select($tableName,$data){
           $sql="select * from ".$tableName;
           $reason="where ";
           foreach ($data as $k=>$v){
               $reason=$reason."  ".$k."='".$v."' and";
           }
           $reason=substr($reason,0,strlen($reason)-3);
           $sql=$sql." ".$reason;
           $data=$this->query($sql);
           return $data;
       }

      public function baseFind($sql){
          $data= $this->query($sql);
          return $data;
      }
      public function baseInsert($sql){
          $this->execute($sql);
      }
      public function baseUpdate($sql){
          $this->execute($sql);
      }
}