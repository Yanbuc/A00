<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>Services</title>
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
			<!---start-services---->
			<div class="services">
						<div class="service-content">
							<h3>Fitness-club SERVED</h3>
							<ul>
								<li><span>1.</span></li>
								<li><p><a href="#">MANUFACTURING &amp; INDUSTRIAL</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>2.</span></li>
								<li><p><a href="#">FINANCIAL INSTITUTION</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>3.</span></li>
								<li><p><a href="#">OFFICE BUILDING</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>4.</span></li>
								<li><p><a href="#">RESIDENTIAL COMMUNITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>5.</span></li>
								<li><p><a href="#">RETAIL INDUSTRY</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>6.</span></li>
								<li><p><a href="#">RETAIL INDUSTRY</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
						</div>
						<div class="services-sidebar">
							<h3>WE PROVIDE</h3>
							 <ul>
							  	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							  	<li><a href="#">Conse ctetur adipisicing</a></li>
							  	<li><a href="#">Elit sed do eiusmod tempor</a></li>
							  	<li><a href="#">Incididunt ut labore</a></li>
							  	<li><a href="#">Et dolore magna aliqua</a></li>
							  	<li><a href="#">Ut enim ad minim veniam</a></li>
					 		 </ul>
					 		 <h3>ARCHIVES</h3>
					 		 <ul>
					 		 	<li><a href="#">JAN, 2013</a></li>
					 		 	<li><a href="#">FEB, 2013</a></li>
					 		 	<li><a href="#">MAR, 2013</a></li>
					 		 	<li><a href="#">APRIL, 2013</a></li>
					 		 </ul>
						</div>
						<div class="clear"> </div>
					</div>
			<!---End-services---->
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