<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>contact</title>
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
			<!---start-contect--->
			<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
			<!---End-contect--->
		</div>
		</div>
		<!---End---content----->
		<div class="clear"> </div>
		<div class="footer contact-footer">
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