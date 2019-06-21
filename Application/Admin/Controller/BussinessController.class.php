<?php
/**
 * Created by PhpStorm.
 * User: shenlei
 * Date: 2019/6/20
 * Time: 18:29
 */

namespace Admin\Controller;
use Admin\Model\ProductModel;
use Common\Controller\AdminLoginController;

class BussinessController extends AdminLoginController
{
    public  function  showAddsellProduct(){
        $this->display("Bussiness/showAddsellProduct");
        return ;
    }

    public function showAddProduct(){
        $sql=$this->produceSelectProductInfoSql();
        $productModel=new ProductModel();
        $productData=$productModel->baseFind($sql);
        $this->assign("productData",$productData);
        $this->display("Bussiness/showAddProduct");
        return;
    }

    private function  produceSelectProductInfoSql(){
        $sql="select `product_id`,`product_name` from ".C("A00_PRODUCT");
        return $sql;
    }

}