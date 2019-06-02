<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>Gallery</title>
		<link href="<?php echo (HOME_CSS_PATH); ?>style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="https://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	</head>
<body>

	<!---start-wrap---->
	<div class="header" id="top">
    <div class="wrap">
        <!---start-logo---->
        <div class="logo">
            <a href="<?php echo U('Home/Index/index');?>"><img src="<?php echo (HOME_IMAGES_PATH); ?>logo.png" title="logo" /></a>
        </div>
        <!---End-logo---->
        <!---start-top-nav---->
        <div class="top-nav">
            <ul>
                <li class="active"><a href="<?php echo U('Home/Index/index');?>">A-C.kids(潮童主页)</a></li>
                <li><a href="<?php echo U('Home/About/index');?>">About</a></li>
                <li><a href="<?php echo U('Home/Service/index');?>">Services</a></li>
                <li><a href="<?php echo U('Home/Gallery/index');?>">Gallery</a></li>
                <li><a href="<?php echo U('Home/Concat/index');?>">Contact</a></li>
            </ul>
        </div>
        <div class="clear"> </div>
        <!---End-top-nav---->
    </div>
    <!---End-header---->
</div>

		<!---start---content----->
		<div class="wrap">
		<div class="content">
			<!---start-gallery---->
			<div class="gallerys">
					<h3>gallery</h3>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg" alt=""></a>
							<h4>Aenean nonummy hendrerit</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid grid2">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg" alt=""></a>
							<h4>nonummy hendrerit mauris</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg" alt=""></a>
							<h4>hendrerit mauris. Phasellus</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg" alt=""></a>
							<h4>Fusce suscipit varius mi. Cum</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid grid2">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg" alt=""></a>
							<h4>sociis natoque penatibus et</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid">
							<a href="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg"><img src="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg" alt=""></a>
							<h4>hendrerit mauris. Phasellus</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
					</div>
					<script type="text/javascript" src="<?php echo (HOME_JS_PATH); ?>jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_PATH); ?>lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
				    <div class="clear"> </div>
				    <div class="projects-bottom-paination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul>
					</div>
				</div>
			<!---End-gallery---->
		</div>
		</div>
			<!---start-box---->
			<div class="boxs">
				<div class="wrap">
				<div class="box">
					<h3>FRESH NEWS</h3>
					<span>20.08.2013</span>
					<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat......	<a href="#">ReadMore</a></p>
				</div>
				<div class="box center-box">
					<ul>
						<li><a href="#">ullamco laboris nisi ut al nisi ut aliquip e</a></li>
						<li><a href="#">nostrud exercitanisi ut aliquip etion ull</a></li>
						<li><a href="#">aliquip ex ea nisi ut aliquip e commodo co</a></li>
						<li><a href="#">orem ipsum dolor nisi ut aliquip e sit amet</a></li>
						<li><a href="#">exercitationnisi ut aliquip e  ullamco laboris</a></li>
					</ul>
				</div>
				<div class="box">
					<h3>DID YOU KNOW?</h3>
					<p>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat......	<a href="#">ReadMore</a></p>
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---End---content----->
		<div class="clear"> </div>
		<div class="footer">
			<div class="wrap">
			<div class="footer-left">
				<p>Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			</div>
			<div class="footer-right">
				<ul>
					<li><a href="#">Our Loocations</a></li>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Personal info</a></li>
					<li><a href="#">Products</a></li>
				</ul>
				<ul>
					<li><a href="#">Our Loocations</a></li>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Personal info</a></li>
					<li><a href="#">Products</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
			
		</div>
	</div>
	<div class="clear"> </div>
	<div class="top-link">
		<a href="#top" class="scroll">Click to Top</a>
	</div>
	<!---End-wrap---->
	
</body>
</html>