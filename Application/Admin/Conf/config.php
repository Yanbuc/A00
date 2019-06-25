<?php
return array(
	//'配置项'=>'配置值'
    "CHECK_MESSAGE"=>array(
        "productAlis"=>  "缺少产品名称 ",
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
    // category 更新检查的字段
    "CHECK_CATEGORY_UPDATE_FIELDS"=>array(
        "category_id"=>"没有类别编号",
        "category_name"=>"没有类别名字",
    ),

    //**********************************数据库名的配置
    "A00_PRODUCT"=>"a00_product",
    "A00_IMAGE_PATH"=>"a00_product_image",
    "A00_PRODUCT_NUM"=>"a00_product_num",
    "A00_CATEGORY"=>"a00_categories",
    "A00_USERS"=>"a00_users",
    "A00_PREVELEDGES"=>"a00_prevelidge",
    // *************************页面配置
    "PAGE_SIZE"=>10,
    //*****************************返回标志配置
    "RETN_SUCCESS"=>"success",
     "RETN_ERROR"=>"error",
    "RETN_ARRAY"=>array("status"=>"","message"=>""),

    //*****************返回日期配置参数**********
     "DATE"=>"date",

    //**********权限id*************************
    "SELECT_PREVELIDGE_PREVELEDGE"=>1,

    //******************************提示配置
    "CATEGORY_TIP"=>"类别名已经存在",
   //******************日志级别配置
    "LOG_LEVEL_CATEGORY_ADD"=>1,
    "LOG_LEVEL_CATEGORY_CHANGE"=>2,
    "LOG_LEVEL_CATEGORY_ADD_EXCEPTION"=>4,
    "LOG_LEVEL_CATEGORY_CHANGE_EXCEPTION"=>3,
    "LOG_LEVEL_CATEGORY_DELETE_EXCEPTION"=>5,
    "LOG_LEVEL_NORMAL"=>6,
    "LOG_LEVEL_PRODUCT_DELETE_EXCEPTION"=>7,
    "LOG_LEVEL_CHANGE_PRODUCT_EXCEPTION"=>8,
    "LOG_LEVEL_CHANGE_PRODUCT_NUM"=>9,
    "LOG_LEVEL_INSERT_PRODUCT_NUM"=>10,
    "LOG_LEVEL_UPDATE_PRODUCT_INFOR"=>11,
    "LOG_LEVEL_SEARCH_USER_INFO"=>12,
    "LOG_LEVEL_SEARCH_USER_INFO_EXCEPTION"=>13,
    "LOG_LEVEL_CHANGE_USER_INFO_EXCEPTION"=>14,
    "LOG_LEVEL_CHANGE_USER_INFO"=>15,
    "LOG_LEVEL_CHANGE_USER_PASSWORD_EXCEPTION"=>16,
    "LOG_LEVEL_CHANGE_USER_PASSWORD"=>17

);