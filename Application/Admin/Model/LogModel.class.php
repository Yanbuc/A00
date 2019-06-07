<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/7
 * Time: 19:19
 */

namespace Admin\Model;
use Common\Model\BaseModel;

class LogModel extends BaseModel
{
    public function insertLog($logLevel,$logMessage,$logDate){
        $sql="insert into a00_log(log_level,log_message,log_date) values('".$logLevel."','".$logMessage."','".$logDate."')";
        $this->execute($sql);
    }



}