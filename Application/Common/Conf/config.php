<?php
return array(
	//'配置项'=>'配置值'
//*************************标签配置***************************
    'LOAD_EXT_CONFIG' => 'db',
  //  'TAGLIB_BUILD_IN'       =>  'Common\Tag\My',
    'TMPL_PARSE_STRING' => array(
       //hui 根目录
       '__HUI__' => __ROOT__.'/Public/static/H-ui',
       //hui 静态目录
       '__HUI_STATIC__' => __ROOT__.'/Public/static/H-ui/static/h-ui'
   ),
//*************************************************************
   'SESSION_NAME'=>"username"
);