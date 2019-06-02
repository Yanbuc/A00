<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/3/6
 * Time: 12:50
 */
namespace Common\Filter;
class FilterFunction
{

        public static function filterUserName($userName){
            $userName=strval($userName);
            return $userName;
        }
        public static  function filterPasswd($pwd){
            $pwd=strval($pwd);
            return $pwd;
        }

}