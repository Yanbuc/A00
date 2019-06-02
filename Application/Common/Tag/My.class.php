<?php
/**
 * Created by PhpStorm.
 * User: 沈磊
 * Date: 2018/3/28
 * Time: 14:11
 */

namespace Common\Tag;
use \Think\Template\TagLib;

class My extends TagLib
{
    //设置自定义标签
    protected $tags= array('admlink' =>array(
                                              'attr'=>'',
                                              'close'=>0
                                             ),
                            'admjs' => array('attr' => '',
                                             'close' =>0
                                            ),

    );

    public function _admlink($tag){
        $link = <<< php
<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="Bookmark" href="__HUI__/favicon.ico" >
    <link rel="Shortcut Icon" href="__HUI__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__HUI_STATIC__/Lib/html5.js"></script>
    <script type="text/javascript" src="__HUI_STATIC__/Lib/respond.min.js"></script>
    <![endif]-->
    <link href="__HUI_STATIC__/css/H-ui.css" rel="stylesheet" type="text/css" />
    <link href="__HUI__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="__HUI_STATIC__/Lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('.pngfix,.icon');</script>
    <![endif]-->
php;
  return $link;

    }


    public function _admjs($tag){
        $link = <<<php
        <script type="text/javascript" src="__HUI__/lib/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="__HUI_STATIC__/js/H-ui.js"></script>
php;
      return $link;

    }


}