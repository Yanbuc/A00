<?php
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
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Application/');

//定义默认主题

define('DEFAULT_THEME','default');

//定义视图目录
define('TMPL_PATH','./Tpl/'.DEFAULT_THEME.'/');

//定义缓存目录

define('RUNTIME_PATH','./Runtime/');

//定义绑定模块
define('BIND_MODULE','Home');

define('CITE_ROOT','http://localhost/');
//define('CITE_ROOT','http://yuegeable.cn/');
define('HOME_CSS_PATH',CITE_ROOT."A00/Public/home/css/");
define('HOME_JS_PATH',CITE_ROOT."A00/Public/home/js/");
define('HOME_IMAGES_PATH',CITE_ROOT."A00/Public/home/images/");
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单