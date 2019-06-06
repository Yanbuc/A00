<?php
/**
 * Created by PhpStorm.
 * User: 沈磊
 * Date: 2018/3/28
 * Time: 13:54
 */
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

//定义默认主题

define('DEFAULT_THEME','default');

//定义视图目录
define('TMPL_PATH','./Tpl/'.DEFAULT_THEME.'/');

//定义缓存目录

define('RUNTIME_PATH','./Runtime/');

define('BIND_MODULE','Admin');

define('CITE_ROOT','http://localhost/');
//define('CITE_ROOT','http://yuegeable.cn/');
define('ADMIN_CSS_PATH',CITE_ROOT."A00/Public/static/css/");
define('ADMIN_IMAGES_PATH',CITE_ROOT."A00/Public/static/images/");
define('ADMIN_JS_PATH',CITE_ROOT."A00/Public/static/js/");
define('ADMIN_PLUGINS_PATH',CITE_ROOT."A00/Public/static/plugins/");
define('ADMIN_EXAMPLE_PATH',CITE_ROOT."A00/Public/static/example/");
define("ADMIN_DEFINE_JS_PATH",CITE_ROOT."A00/Public/Admin/js/");
define('ADMIN_SESSION_NAME',"username");
define("ADMIN_CLOTHES_PATH","./Public/picture/clothes/");
define("PUBLIC_PICTURE_PATH",CITE_ROOT."A00/Public/picture/clothes/");

define('H_UI_PATH',CITE_ROOT.'A00/Public/static/H-ui/');
define('H_UI_STATIC_PATH',CITE_ROOT.'A00/Public/static/H-ui/static/');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单