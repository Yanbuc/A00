<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

</head>
<body>
<!-- Themer -->
<div id="mws-themer">
    <div id="mws-themer-hide"></div>
    <div id="mws-themer-content">
        <div class="mws-themer-section">
            <label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
        </div>
    </div>
    <div id="mws-themer-css-dialog">
        <div class="mws-form">
            <div class="mws-form-row" style="padding:0;">
                <div class="mws-form-item">
                    <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Themer End -->

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

        <!-- Main Navigation -->
<div id="mws-navigation">
    <ul>
        <li class="active"><a href="<?php echo U('Admin/Index/admin');?>" class="mws-i-24 i-home">后台界面</a></li>
        <li>
            <a href="#" class="mws-i-24 i-chart">服装</a>
            <ul>
                <li><a href="<?php echo U('Admin/Clothes/show');?>">添加</a></li>
                <li><a href="<?php echo U('Admin/Clothes/showProduct');?>">显示所有产品</a></li>
            </ul>
        </li>
        <li>
            <a  class="mws-i-24 i-chart">类别</a>
            <ul>
                <li><a href="<?php echo U('Admin/Category/showCatgeoryList');?>">显示类别</a></li>
                <li><a href="<?php echo U('Admin/Category/add');?>">添加</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="mws-i-24 i-list">Forms</a>
            <ul>
                <li><a href="">Layouts</a></li>
                <li><a href="">Elements</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- End Navigation -->


    </div>


    <!-- Container Wrapper -->
    <div id="mws-container" class="clearfix">

        <!-- Main Container -->
        <div class="container">
            <div class="mws-report-container clearfix">
    <a class="mws-report" href="#">
        <span class="mws-report-icon mws-ic ic-building"></span>
        <span class="mws-report-content">
            <span class="mws-report-title">search/查询</span>
                           <span class="mws-report-value"> &nbsp;&nbsp; &nbsp; &nbsp;</span>
                        </span>
    </a>

    <a class="mws-report" href="#">
        <span class="mws-report-icon mws-ic ic-sport"></span>
        <span class="mws-report-content">
                        	<span class="mws-report-title"><br/>显示服饰销量趋势</span>
                            <span class="mws-report-value ">&nbsp;&nbsp; &nbsp; &nbsp;</span>
                        </span>
    </a>

    <a class="mws-report" href="#">
        <span class="mws-report-icon mws-ic ic-walk"></span>
        <span class="mws-report-content">
                        	<span class="mws-report-title">Kilometers Walked</span>
                            <span class="mws-report-value">14</span>
                        </span>
    </a>

    <a class="mws-report" href="#">
        <span class="mws-report-icon mws-ic ic-bug"></span>
        <span class="mws-report-content">
                        	<span class="mws-report-title">Bugs Fixed</span>
                            <span class="mws-report-value up">22%</span>
                        </span>
    </a>

    <a class="mws-report" href="#">
        <span class="mws-report-icon mws-ic ic-car"></span>
        <span class="mws-report-content">
                        	<span class="mws-report-title">Cars Repaired</span>
                            <span class="mws-report-value">77</span>
                        </span>
    </a>
</div>

            <div class="mws-panel grid_5">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-graph">Charts</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-panel-content">
                        <div id="mws-dashboard-chart" style="width:100%; height:215px;"></div>
                    </div>
                </div>
            </div>

            <div class="mws-panel grid_3">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-books-2">Website Summary</span>
                </div>
                <div class="mws-panel-body">
                    <ul class="mws-summary">
                        <li>
                            <span>1238</span> total visits
                        </li>
                        <li>
                            <span>512</span> votes
                        </li>
                        <li>
                            <span>11</span> new members
                        </li>
                        <li>
                            <span>716</span> products
                        </li>
                        <li>
                            <span>831</span> comments
                        </li>
                        <li>
                            <span>312</span> items purchased
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-sign-post">Register New Member</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-wizard clearfix">
                        <ul>
                            <li>
                                <a class="mws-ic-16 ic-accept" href="#">Member Profile</a>
                            </li>
                            <li class="current">
                                <a href="#" class="mws-ic-16 ic-delivery">Membership Stype</a>
                            </li>
                            <li>
                                <a class="mws-ic-16 ic-user" href="#">Confirmation</a>
                            </li>
                        </ul>
                    </div>
                    <form class="mws-form" action="http://www.malijuwebshop.com/themes/mws-admin/dashboard.html">
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label>Fullname</label>
                                <div class="mws-form-item large">
                                    <input type="text" name="fullname" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Email</label>
                                <div class="mws-form-item large">
                                    <input type="text" name="email" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Address</label>
                                <div class="mws-form-item large">
                                    <textarea name="address" rows="100%" cols="100%"></textarea>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Gender</label>
                                <div class="mws-form-item">
                                    <ul class="mws-form-list">
                                        <li><input type="radio" id="male" name="gender" /> <label for="male">Male</label></li>
                                        <li><input type="radio" id="female" name="gender" /> <label for="female">Female</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Prev" class="mws-button gray left" />
                            <input type="submit" value="Next" class="mws-button green" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="mws-panel grid_8 mws-collapsible">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-table-1">Simple Table</span>
                </div>
                <div class="mws-panel-body">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Main Container -->

        <!-- Footer -->
        <div id="mws-footer">
            Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </div>
        <!-- End Footer -->

    </div>
    <!-- End Container Wrapper -->

</div>
<!-- End Main Wrapper -->


</body>
</html>