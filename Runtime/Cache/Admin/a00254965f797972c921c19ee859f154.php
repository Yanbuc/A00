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
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>jimgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_PLUGINS_PATH); ?>spinner/spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>jui/jquery.ui.css" media="screen" />

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_PATH); ?>mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->

<script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jimgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jgrowl/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.filestyle.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.dataTables.js"></script>
<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>flot/excanvas.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>flot/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>sourcerer/Sourcerer-1.2.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_PLUGINS_PATH); ?>spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>jquery-ui.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>mws.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>demo.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_PATH); ?>themer.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("div#mws-login .mws-login-back").mouseover(function(event) {
			$(this).find("a").animate({'left':0})
		}).mouseout(function(event) {
			$(this).find("a").animate({'left':70})
		});
	});
</script>

<title>MWS Admin - Login Page</title>

</head>

<body>

	<div id="mws-login">
    	<h1>Login</h1>
        <div class="mws-login-lock"><img src="<?php echo (ADMIN_CSS_PATH); ?>icons/24/locked-2.png" alt="" /></div>
    	<div id="mws-login-form">
        	<form class="mws-form" action="<?php echo U('Admin/Index/checkLoginIn');?>" method="post">
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input name="username" type="text" class="mws-login-username mws-textinput" placeholder="username" />
                    </div>
                </div>
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input name="password" type="password" class="mws-login-password mws-textinput" placeholder="password" />
                    </div>
                </div>
                <div class="mws-form-row">
                	<input type="submit" value="Login" class="mws-button green mws-login-button" />
                </div>
            </form>
        </div>
    </div>


</body>
</html>