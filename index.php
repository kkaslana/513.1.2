<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edible Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- //bootstrap-css -->
<!-- css -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- //css -->
<!-- fonts -->
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<script src="js/bootstrap.js"></script>
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<div class="col-md-6 about-left">
	<img src="images/logo.png"  />	
</div>
</head>
<body>
	
	<!--baner-->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="banner-top">
				<div class="social">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="facebook twitter"> </a></li>
						<li><a href="#" class="facebook chrome"> </a></li>
						<li><a href="#" class="facebook dribbble"> </a></li>
					</ul>
				</div>
				<div class="header-top-right">
					<form>
						<input type="text" placeholder="Search" required="">
						<input type="submit" value="">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-top-grid">
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: false,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						 });				
					});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-info">
								<h3>Welcome <span>TO</span> Luca's Loaves</h3>
								<h5>Luca's Loaves</h5>
								<p>We are committed to making people enjoy eating bread</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Vel <span>molestie</span> elit condimentum</h3>
								<h5>molestie elit condi</h5>
								<p> Morbi quis sed dignissim augue ut ex cursus, vel molestie elit condimentum.  mattis nec ipsum. tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui.</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Curabitur <span>utpul</span> vinar duicursus</h3>
								<h5>molestie elit condi</h5>
								<p>Molestie sed dignissim augue ut ex cursus, vel elit condimentum.  mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis, eget laoreet felis.</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!--//baner-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<h1><a href="index.html">Luca's Loaves</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center">
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="aboutus.html">About</a></li>					
						<li><a href="orderonline.php">orderonline</a></li>
					
						<li><a href="register.php"> registers</a></li>
								
						<li><a href="upload.php">careers</a></li>	
						<li><a href="contactus.html">Contact</a></li>
					</ul>	
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>		
	</div>	
	<!-- script-for sticky-nav -->
			<script>
			$(document).ready(function() {
				 var navoffeset=$(".top-nav").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop(); 
					if(scrollpos >=navoffeset){
						$(".top-nav").addClass("fixed");
					}else{
						$(".top-nav").removeClass("fixed");
					}
				 });
				 
			});
			</script>
			<!-- /script-for sticky-nav -->
	<!--navigation-->
	<!-- banner-bottom -->
	<div class="welcome">
		<div class="welcome-left">
			<h3>Key facts about Luca and the bread!</h3>
			<h4>Luca's Loaves</h4>
			<p>Luca commenced his career as a lifeguard but was laid off. He found he enjoyed making bread and experimented and in no time at all had built up a thriving business. 
			</p>
		</div>
		<div class="welcome-right">
				
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- offer -->
	<div class="welcome offer">
		<div class="welcome-left offer-left">
			<h3>Luca's Loaves</h3>
			<p>
				
				
			</p>
			<div class="offer-left-list">
				<ul>
					<li><a href="#">1. It has no store/commercial yeast</a></li>
					<li><a href="#">2. Hand kneaded and shaped in-house</a></li>
					<li><a href="#">3. Prepared over 14-17hrs</a></li>
					<li><a href="#">4. Organic flour, the water is filtered and the electricity used to power the oven is solar powered!</a></li>
				</ul>
			</div>
			<div class="offer-left-list">
				<ul>
					<li><a href="#">5. The bread purchased in the shop shall be mixed and baked within 2 hours</a></li>
					<li><a href="#">This means that the gluten content is very high, </a></li>
					<li><a href="#">which may cause people to feel blocked when eating bread.</a></li>
					<li><a href="#">Sourdough is a good choice and easier to digest.</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="welcome-right offer-right">
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //offer -->
	<!-- new -->
	<div class="welcome new">
		<div class="welcome-left new-left">
			<h3>What's New</h3>
			<div class="new-grids">
				<div class="date">
					<p>Join </p>
					<span>our team</span>
				</div>
				<div class="new-grid-right">
					<p>We are expanding our branches and need experienced baker regularly. Send us your detail with the form below and we will be in contact shortly.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="new-grids">
				<div class="date">
					<p>Our </p>
					<span>Address</span>
				</div>
				<div class="new-grid-right">
					<p>36 Garden Ave, Mullumbimby NSW 2482 </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="welcome-right new-right">
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //new -->
	<!-- services -->
	<div id="services" class="services">
		<!-- container -->
		<div class="container">
			<div class="services-info">
				<h3>registers</h3>
			</div>
			<div class="services-grids">
				<div class="col-md-4 services-grid">
					<div class="services-icon">
						<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
					</div>
					<h4></h4>
					<p></p>
				</div>
				<div class="col-md-4 services-grid">
					<div class="services-icon">
						<span class="glyphicon glyphicon-asterisk glyphicon-check" aria-hidden="true"></span>
					</div>
					<h4></h4>
					<p></p>
				</div>
				<div class="col-md-4 services-grid">
					<div class="services-icon">
						<span class="glyphicon glyphicon-asterisk glyphicon-time" aria-hidden="true"></span>
					</div>
					<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- services -->
	<!-- new-bottom -->
	<div class="new-bottom">
		<!-- container -->
		<div class="container">
			<div class="new-bottom-info">
				<h2></h2>
				<p></p>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //new-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-info">
						<h3>vollerei</h3>
					</div>
					<div class="footer-grid-list">
						<ul>
							<li><a href="#">Email Us</a></li>
							<li><a href="#">1278150365@QQ.com	</a></li>
							<li><a href="#">Call Us</a></li>
							<li><a href="#">+1 5589 55488 55</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-info">
						<h3>Address</h3>
					</div>
					<div class="footer-grid-list">
						<h4>Headquarters</h4>
						<p>36 Garden Ave, Mullumbimby NSW 2482 
							<span></span>
							
						</p>
						<h4></h4>
						<p>
							<span></span>
							E-mail : <a href="mailto:info@example.com">1278150365@qq.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-info">
						<h3>Stay in touch</h3>
					</div>
					<div class="footer-grid-list">
						<form>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- container -->
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<!-- container -->
		<div class="container">
		<p>vollerei（GuChaoyi） 605 &copy; IT20A1_208<a target="_blank" ></a></p>
		</div>
		<!-- /container -->
	</div>
	<!-- //copyright -->
</body>
</html>