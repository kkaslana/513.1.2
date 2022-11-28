<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>careers</title>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.html" >About</a></li>					
						<li><a href="orderonline.php">orderonline</a></li>
						
						<li><a href="register.php" >registers</a></li>
                        <li><a href="upload.php"class="active">Careers</a></li>
						<li><a href="contactus.html">Contact</a></li>
					</ul>	
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>		
	</div>	
    <div class="wrapper">
        <div id="welcome" class="container">
            <div class="title">
                <h1>Join our team</h1>
                <p> We are expanding our branches and need experienced baker regularly.</n>
                    Send us your detail with the form below</br>
                and we will be in contact shortly</p>
    
                <div id="three-column" class="container">
               
                    <div class="title">
                        <h2>Fill out the form below and upload your cover letter and resume</h2>
                        <form action="upload_file.php" method="post" enctype="multipart/form-data">
                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname"><br>
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" name="lname"><br/>
                            <label for="lname">Email Address:</label><br>
                            <input type="text" id="email" name="lname"><br/>
							<label for="lname">Write about yourself in this field...</label><br>
                            <textarea id="w3review" name="w3review" rows="4" cols="50">
                                
                                </textarea><br/>
								<p>Please submit PDF file </p>
                        <label for="file">Cover Letter</label>
                        <input type="file" name="file" id="file"><br/>
                        <label for="file">Resume</label>
                        <input type="file" name="file" id="file2"><br/>
                        <input type="submit" name="submit" value="Submit"><br/>
                    </form> 
                    
                    </div>
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