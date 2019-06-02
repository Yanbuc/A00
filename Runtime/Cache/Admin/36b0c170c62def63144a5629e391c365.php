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
    <title>MWS Admin - Form Layouts</title>

</head>

<body>

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

<div id="mws-header" class="clearfix">

    <!-- Logo Wrapper -->
    <div id="mws-logo-container">
        <div id="mws-logo-wrap">
            <img src="<?php echo (ADMIN_IMAGES_PATH); ?>mws-logo.png" alt="mws admin" />
        </div>
    </div>

    <!-- User Area Wrapper -->
    <div id="mws-user-tools" class="clearfix">

        <!-- User Notifications -->
        <div id="mws-user-notif" class="mws-dropdown-menu">
            <a href="#" class="mws-i-24 i-alert-2 mws-dropdown-trigger">Notifications</a>
            <span class="mws-dropdown-notif">35</span>
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
            <span class="mws-dropdown-notif">35</span>
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
                   用户名: <?php echo ($username); ?>
                </div>
                <ul>
                    <li><a href="<?php echo U('Admin/Chpwd/index');?>">修改密码</a></li>
                    <li><a href="<?php echo U('Admin/Index/logout');?>">退出登陆</a></li>
                </ul>
            </div>
        </div>
        <!-- End User Functions -->

    </div>
</div>

<div id="mws-wrapper">
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>
    <div id="mws-sidebar">
        <div id="mws-searchbox" class="mws-inset">
            <form action="http://www.malijuwebshop.com/themes/mws-admin/form_layouts.html">
                <input type="text" class="mws-search-input" />
                <input type="submit" class="mws-search-submit" />
            </form>
        </div>
        <!-- Main Navigation -->
<div id="mws-navigation">
    <ul>
        <li class="active"><a href="<?php echo U('Admin/DashBoard/index');?>" class="mws-i-24 i-home">后台界面</a></li>
        <li>
            <a href="<?php echo U('Admin/Charts/index');?>" class="mws-i-24 i-chart">服装</a>
            <ul>
                <li><a href="<?php echo U('Admin/Clothes/show');?>">添加</a></li>
            </ul>
        </li>
        <!--<li><a href="<?php echo U('Admin/Calendar/index');?>" class="mws-i-24 i-day-calendar">Calendar</a></li>-->
        <li>
            <a href="#" class="mws-i-24 i-list">Forms</a>
            <ul>
                <li><a href="<?php echo U('Admin/Form/showLayOut');?>">Layouts</a></li>
                <li><a href="<?php echo U('Admin/Form/showElements');?>">Elements</a></li>
            </ul>
        </li>
        <!--
        <li><a href="../../../../../../admin/widgets.html" class="mws-i-24 i-cog">Widgets</a></li>
        <li><a href="../../../../../../admin/typography.html" class="mws-i-24 i-text-styling">Typography</a></li>
        <li><a href="../../../../../../admin/grids.html" class="mws-i-24 i-blocks-images">Grids &amp; Panels</a></li>
        <li><a href="../../../../../../admin/gallery.html" class="mws-i-24 i-polaroids">Gallery</a></li>
        <li><a href="../../../../../../admin/error.html" class="mws-i-24 i-alert-2">Error Page</a></li>
        -->
    </ul>
</div>
<!-- End Navigation -->

    </div>

    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-list">Inline Form</span>
                </div>
                <div class="mws-panel-body">
                    <form class="mws-form"  enctype="multipart/form-data" id="uploadForm">
    <div class="mws-form-inline">
        <div class="mws-form-row">
            <label>产品编号</label>
            <div class="mws-form-item small">
                <input type="text" class="mws-textinput" name="clothesId" id="clothesId" />
            </div>
        </div>
        <div class="mws-form-row">
            <label>衣服别名</label>
            <div class="mws-form-item medium">
                <input type="text" class="mws-textinput" name="clothesAlis" id="clothesAlis" />
            </div>
        </div>
        <div class="mws-form-row">
            <label>衣服价格</label>
            <div class="mws-form-item large">
                <input type="text" class="mws-textinput" name="clothesPrice" id="clothesPrice" />
            </div>
        </div>
        <div class="mws-form-row">
            <label>服装类别</label>
            <div class="mws-form-item large">
                <input type="text" class="mws-textinput" name="clothesType" id="clothesType" />
            </div>
        </div>
        <div class="mws-form-row">
            <label>简单描述</label>
            <div class="mws-form-item large">
                <textarea rows="100%" cols="100%" name="clothesDescription" id="clothesDescription"></textarea>
            </div>
        </div>
        <div class="mws-form-row">
            <label>服装图片</label>
            <div class="mws-form-item large">
                <input type="file" class="mws-textinput" name="clothesImage" id="clothesImage" />
            </div>
        </div>
        <!--
        <div class="mws-form-row">
            <label>Dropdown List</label>
            <div class="mws-form-item small">
                <select>
                    <option>Option 1</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
            </div>
        </div>
        -->
       <!--
        <div class="mws-form-row">
            <label>男装 or 女装</label>
            <div class="mws-form-item clearfix">
                <ul class="mws-form-list inline">
                    <li><input type="checkbox" /> <label>男装</label></li>
                    <li><input type="checkbox" /> <label>女装</label></li>
                    <li><input type="checkbox" /> <label>通用</label></li>
                </ul>
            </div>
        </div>
        -->
        <div class="mws-form-row">
            <label>男装 or 女装</label>
            <div class="mws-form-item clearfix">
                <ul class="mws-form-list inline">
                    <li><input type="radio" name="sex" value="1" /> <label>男装</label></li>
                    <li><input type="radio" name="sex" value="2" /> <label>女装</label></li>
                    <li><input type="radio" name="sex" value="3" /> <label>通用</label></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mws-button-row">
        <button type="button" value="提交" class="mws-button green" onclick="sendClothesData()" >提交</button>
        <!--
        <input type="submit" value="Submit" class="mws-button green" />
        <input type="submit" value="Submit" class="mws-button red" />
        <input type="submit" value="Submit" class="mws-button blue" />
        <input type="submit" value="Submit" class="mws-button orange" />
        <input type="submit" value="Submit" class="mws-button gray" />
        <input type="submit" value="Submit" class="mws-button black" />
        <input type="submit" value="Disabled" class="mws-button gray" disabled="disabled" />
        -->
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>