<?php
return array(
	//'配置项'=>'配置值'
    "CHECK_MESSAGE"=>array(
        "productId"=>"缺少产品编号 ",
        "productAlis"=>  "缺少产品名称 ",
        "productPrice"=>  "缺少产品价格 ",
        "productType" => "缺少产品类型 ",
        "sex"=>"缺少产品性别 "
    ),
    "CATEGORY_CHECK"=>array(
        "productName"=>"缺少类别名"
    ),
    "TRANSFORM_FIELDS"=>array("productId",
        "productAlis",
        "productPrice",
        "productType",
        "sex","productDescpription"),
    //**********************************数据库名的配置
    "A00_PRODUCT"=>"a00_product",
    "A00_IMAGE_PATH"=>"a00_product_image",
    "A00_PRODUCT_NUM"=>"a00_product_num",
    "A00_CATEGORY"=>"a00_categories",
    "A00_USERS"=>"a00_users",
    // *************************页面配置
    "PAGE_SIZE"=>10,
    //*****************************返回标志配置
    "RETN_SUCCESS"=>"success",
     "RETN_ERROR"=>"error",

    //******************************提示配置
    "CATEGORY_TIP"=>"类别名已经存在",

);