<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<link href="<?php echo (HOME_CSS_PATH); ?>style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo (HOME_CSS_PATH); ?>responsiveslides.css">
		<script src="https://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php echo (HOME_JS_PATH); ?>responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        speed: 600
			      });
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
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
		<!---start-header---->
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
		<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg" alt=""></li>
					      <li><img src="<?php echo (HOME_IMAGES_PATH); ?>slider1.jpg" alt=""></li>
					      <li><img src="<?php echo (HOME_IMAGES_PATH); ?>slider3.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		<!---start---content----->
		<div class="wrap">
		<div class="content">
			<!---start-grids----->
			<div class="grids">
				 <div class="grid">
				 	<h3>Building</h3>
				 	<a href="#"><img src="<?php echo (HOME_IMAGES_PATH); ?>g1.jpg"  title="Buliding" /></a>
				 	<p>orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 	<a class="button" href="#">Read More</a>
				 </div>
				 <div class="grid">
				 	<h3>Trainng</h3>
				 	<a href="#"><img src="<?php echo (HOME_IMAGES_PATH); ?>g3.jpg"  title="Buliding" /></a>
				 	<p>orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 	<a class="button" href="#">Read More</a>
				 </div>
				 <div class="grid">
				 	<h3>Exercise</h3>
				 	<a href="#"><img src="<?php echo (HOME_IMAGES_PATH); ?>g2.jpg"  title="Buliding" /></a>
				 	<p>orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 	<a class="button" href="#">Read More</a>
				 </div>
				 <div class="grid last-grid">
				 	<h3>Club</h3>
				 	<a href="#"><img src="<?php echo (HOME_IMAGES_PATH); ?>g4.jpg"  title="Buliding" /></a>
				 	<p>orem ipsum dolor sit amet, consectetur adipisicing quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 	<a class="button" href="#">Read More</a>
				 </div>
				 <div class="clear"> </div>
			</div>
			<!---End-grids----->
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