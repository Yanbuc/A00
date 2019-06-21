<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/4
 * Time: 19:04
 */

function getPage($count,$pageSize){
    $p =new \Think\Page($count,$pageSize);
    $p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>'.$p->listRows.'</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev','上一页');
    $p->setConfig('next','下一页');
    $p->setConfig('last','末页');
    $p->setConfig('first','首页');
    $p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    return $p;
}

function getLogMessage($message){
    $user=$_SESSION["username"];
    $ip = $_SERVER['REMOTE_ADDR'];
    return $user."|".$ip."|".$message;
}
//对图片的路径进行加工
function dealImagePath($data){
    foreach($data as $k =>$v){
        $data[$k]["image_path"]=PUBLIC_PICTURE_PATH.$v["image_path"];
    }
    return $data;
}

function encodePassword($pwd){
    $newPd=md5($pwd);
    $newPd=substr($newPd,0,16);
    return $newPd;
}

function getCurrentDate($flag){
    $date="";
    if($flag=="date") {
        $date = date("Y_m_d_H:i:s");

    }
    return $date;
}



