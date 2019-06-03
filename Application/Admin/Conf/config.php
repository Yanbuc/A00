<?php
return array(
	//'配置项'=>'配置值'
    "CHECK_MESSAGE"=>array(
        "productId"=>"no productId ",
        "productAlis"=>  "缺少产品名称 ",
        "productPrice"=>  "缺少产品价格 ",
        "productType" => "缺少产品类型 ",
        "sex"=>"缺少产品性别 "
    ),

    "TRANSFORM_FIELDS"=>array("productId",
        "productAlis",
        "productPrice",
        "productType",
        "sex","productDescpription"),
    //**********************************数据库名的配置
    "A00_PRODUCT"=>"a00_product",
    "A00_IMAGE_PATH"=>"a00_product_image"


);