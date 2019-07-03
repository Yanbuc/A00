<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>fonts/ptsans/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>fluid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>mws.style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>icons/icons.css" media="screen" />

    <!-- Demo and Plugin Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>demo.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/colorpicker/colorpicker.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/jimgareaselect/css/imgareaselect-default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/tipsy/tipsy.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/sourcerer/Sourcerer-1.2.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/jgrowl/jquery.jgrowl.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/spinner/spinner.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>jui/jquery.ui.css" media="screen" />

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>mws.theme.css" media="screen" />

    <!-- JavaScript <?php echo (ADMIN_PLUGINS_PATH); ?> -->

    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>/jquery-1.7.1.min.js"></script>

    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jimgareaselect/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jgrowl/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.filestyle.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.dataTables.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/excanvas.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.stack.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/colorpicker/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/sourcerer/Sourcerer-1.2.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>jquery-ui.js"></script>

    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>mws.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>demo.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>themer.js"></script>

    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>Click.js"></script>
    <title>A00 后台页面</title>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/html5.js"></script>
    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>myconfig.js"></script>
    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>headerJ.js"></script>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo (H_UI_STATIC_PATH); ?>h-ui/css/H-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (H_UI_PATH); ?>lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--<link href="<?php echo (H_UI_STATIC_PATH); ?>h-ui/css/style.css" rel="stylesheet" type="text/css" />--><!--自己的样式-->
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('.pngfix,.icon');</script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/layer/2.4/layer.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var ids=[1,2];
            var prefix="ul.nev";
            for(var i=0;i<ids.length;i++){
                $(prefix+""+ids[i]+" li").hide()
            }
            $("ul.dev li").hide();
        });
    </script>
    <style type="text/css">
        body
        {
            overflow-x:hidden;
        }
    </style>
</head>
<body>


<div id="mws-header" class="clearfix">

    <!-- Logo Wrapper -->
    <div id="mws-logo-container">
        <div id="mws-logo-wrap">
            <!--<img src="<?php echo (ADMIN_IMAGES_PATH); ?>mws-logo.png" alt="mws admin" />-->
        </div>
    </div>

    <!-- User Area Wrapper -->
    <div id="mws-user-tools" class="clearfix">

        <!-- User Notifications -->
        <div id="mws-user-notif" class="mws-dropdown-menu">
            <a href="#" class="mws-i-24 i-alert-2 mws-dropdown-trigger">Notifications</a>
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-notifications">

                        <!-- Notification Content -->
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <!-- End Notification Content -->

                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">

            <a href="#" class="mws-i-24 i-message mws-dropdown-trigger">Messages</a>
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">

                        <!-- Message Content -->
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <!-- End Messages -->

                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Messages</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- User Functions -->
        <div id="mws-user-info" class="mws-inset">
            <div id="mws-user-photo">
                <img src="<?php echo (ADMIN_EXAMPLE_PATH); ?>/profile.jpg" alt="User Photo" />
            </div>
            <div id="mws-user-functions">
                <div id="mws-username">
                      用户名: <?php echo ($username); ?><input type="hidden" id="userNa" value="<?php echo ($userId); ?>">

                </div>
                <ul>
                    <li><a onclick="changeUserInfo()">用户信息</a></li>
                    <li><a onclick="changeUserPwd()" >修改密码</a></li>
                    <li><a href="<?php echo U('Admin/Index/logout');?>">退出登陆</a></li>
                </ul>
            </div>
        </div>
        <!-- End User Functions -->

    </div>
</div>




<!-- Main Wrapper -->
<div id="mws-wrapper">
    <!-- Necessary markup, do not remove -->
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>

    <!-- Sidebar Wrapper -->
    <div id="mws-sidebar">

        <!-- Search Box -->
        <div id="mws-searchbox" class="mws-inset">
            <form action="http://www.malijuwebshop.com/themes/mws-admin/dashboard.html">
                <input type="text" class="mws-search-input" />
                <input type="submit" class="mws-search-submit" />
            </form>
        </div>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>fonts/ptsans/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>fluid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>mws.style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>icons/icons.css" media="screen" />

    <!-- Demo and Plugin Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>demo.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/colorpicker/colorpicker.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/jimgareaselect/css/imgareaselect-default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/tipsy/tipsy.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/sourcerer/Sourcerer-1.2.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/jgrowl/jquery.jgrowl.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>/spinner/spinner.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>jui/jquery.ui.css" media="screen" />

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>mws.theme.css" media="screen" />

    <!-- JavaScript <?php echo (ADMIN_PLUGINS_PATH); ?> -->

    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>/jquery-1.7.1.min.js"></script>

    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jimgareaselect/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jgrowl/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.filestyle.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.dataTables.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/excanvas.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.stack.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/colorpicker/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/sourcerer/Sourcerer-1.2.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>jquery-ui.js"></script>

    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>mws.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>demo.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>themer.js"></script>

    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>Click.js"></script>
    <title>A00 后台页面</title>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/html5.js"></script>
    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>myconfig.js"></script>
    <script type="text/javascript"  src="<?php echo (ADMIN_DEFINE_JS_PATH); ?>headerJ.js"></script>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo (H_UI_STATIC_PATH); ?>h-ui/css/H-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (H_UI_PATH); ?>lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--<link href="<?php echo (H_UI_STATIC_PATH); ?>h-ui/css/style.css" rel="stylesheet" type="text/css" />--><!--自己的样式-->
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('.pngfix,.icon');</script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (H_UI_PATH); ?>lib/layer/2.4/layer.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var ids=[1,2];
            var prefix="ul.nev";
            for(var i=0;i<ids.length;i++){
                $(prefix+""+ids[i]+" li").hide()
            }
            $("ul.dev li").hide();
        });
    </script>
    <style type="text/css">
        body
        {
            overflow-x:hidden;
        }
    </style>
</head>
<body>
<div id="mws-navigation">
    <ul>
        <li class="active"><a href="<?php echo U('Admin/Index/admin');?>" class="mws-i-24 i-home" onclick="showAll()">后台界面</a></li>
        <li>
            <a href="#" class="mws-i-24 i-chart"  onclick="showli('1')" >服装</a>
            <ul class="nev1">
                <li ><a href="<?php echo U('Admin/Clothes/show');?>">添加</a></li>
                <li ><a href="<?php echo U('Admin/Clothes/showProduct');?>">显示所有产品</a></li>
            </ul>
        </li>
        <li>
            <a  class="mws-i-24 i-chart" onclick="showli('2')">类别</a>
            <ul class="nev2">
                <li><a href="<?php echo U('Admin/Category/showCatgeoryList');?>">显示类别</a></li>
                <li><a href="<?php echo U('Admin/Category/add');?>">添加</a></li>
            </ul>
        </li>
        <li>
            <a  href="#" class="mws-i-24 i-chart">商品</a>
            <ul>
                <li><a href="<?php echo U('Admin/Bussiness/showAddProduct');?>">进货</a></li>
                <li><a href="<?php echo U('Admin/Bussiness/showAddsellProduct');?>">出货</a></li>
            </ul>
        </li>
        <li>
            <a  href="#" class="mws-i-24 i-chart">权限管理</a>
            <ul>
                <li><a href="<?php echo U('Admin/Priviledges/showPriviledgesList');?>">权限列表</a></li>
            </ul>
        </li>
        <li>
            <a  href="#" class="mws-i-24 i-chart">用户管理</a>
            <ul>
                <li><a href="<?php echo U('Admin/User/showUserInfoList');?>">用户列表</a></li>
                <li><a href="<?php echo U('Admin/User/showAddUser');?>">添加用户</a></li>
                <li><a href="<?php echo U('Admin/Bussiness/showAddsellProduct');?>">查询用户</a></li>
            </ul>
        </li>
    </ul>
</div>
</body>


    </div>


    <!-- Container Wrapper -->
    <div id="mws-container" class="clearfix">

        <!-- Main Container -->
        <div class="container">

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-sign-post">查询产品信息</span>
                </div>
                <div class="mws-panel-body" >
                    <form class="mws-form form-horizontal" action="" >
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品编号</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <input id="product_id" type="text" class="input-text" autocomplete="off" placeholder="产品编号">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品名</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <input id="product_name" type="password" class="input-text" autocomplete="off" placeholder="产品名">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品查询信息显示</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <textarea class="textarea" placeholder="查询产品信息显示" rows="" cols="" name=""></textarea>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input class="btn btn-primary radius" type="submit" value="查询">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mws-panel grid_8 mws-collapsible">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-table-1">卖出商品</span>
                </div>
                <div class="mws-panel-body">
                    <form class="mws-form form-horizontal" action="" style="width:80%">
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品名字</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <input id="product_sub_name" type="text" class="input-text" autocomplete="off" placeholder="产品名字">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品数量</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <input id="product_sub_num" type="password" class="input-text" autocomplete="off" placeholder="产品数量">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3">产品总金额</label>
                            <div class="formControls col-xs-8 col-sm-9">
                                <input id="product_price" type="password" class="input-text" autocomplete="off" placeholder="产品总金额">
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input class="btn btn-primary radius" type="submit" value="售出">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Main Container -->



    </div>
    <!-- End Container Wrapper -->

</div>
<!-- End Main Wrapper -->
</body>
<script type="text/javascript">
      $("#product_sub_num").blur(function(){

      });
</script>
</html>