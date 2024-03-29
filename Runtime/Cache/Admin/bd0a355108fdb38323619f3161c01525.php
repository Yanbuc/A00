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
<form action="" method="post" class="form form-horizontal" id="demoform-1">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">权限编号</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input id="prevelidge_id" readonly="true" type="text" class="input-text" autocomplete="off" placeholder="权限编号" value="<?php echo ($prevelidgeData['prevelidge_id']); ?>">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">权限描述</label>
        <div class="formControls col-xs-8 col-sm-9">
            <?php if($prevelidgeData['prevelidge_id'] < 5 ): ?><input id="desc1"  name="tmp_desc" type="text" readonly="true" class="input-text" autocomplete="off" placeholder="权限描述" value="<?php echo ($prevelidgeData['prevelidge_desc']); ?>">
                <?php else: ?>
                <input id="desc2" name="tmp_desc" type="text" class="input-text" autocomplete="off" placeholder="权限描述" value="<?php echo ($prevelidgeData['prevelidge_desc']); ?>"><?php endif; ?>
            <input id="preve_hidden" type="hidden" value="<?php echo ($prevelidgeData['prevelidge_desc']); ?>"  />
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">权限添加时间</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input id="prevelidge_add_date" readonly="true" type="text" class="input-text" autocomplete="off" placeholder="权限添加日期" value="<?php echo ($prevelidgeData['prevelidge_add_date']); ?>">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">权限添加人</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input id="prevelidge_add_owner" readonly="true"  type="text" class="input-text" autocomplete="off" placeholder="权限添加人" value="<?php echo ($prevelidgeData['prevelidge_add_user']); ?>">
        </div>
    </div>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <input  id="today" class="btn btn-success radius" type="button" value="是否修改" onclick="todayDate()" style="color: #FFFFFF;" name="1">
            <!--<button type="button" id="today" class="btn btn-primary radius" onclick="todayDate()" style="color: #0062CC;" name="1">是否修改</button>-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-primary radius" type="button" value="提交" onclick="updateSinglePrevelidge()">
        </div>
    </div>
</form>
</body>
</html>