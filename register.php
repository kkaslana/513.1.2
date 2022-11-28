<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $Vollerei605 = $username = $password ="";
$name_err = $address_err = $Vollerei605_err = $username_err =$password_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate Vollerei605
    $input_Vollerei605 = trim($_POST["Vollerei605"]);
    if(empty($input_Vollerei605)){
        $Vollerei605_err = "Please enter the Vollerei605 amount.";     
    } elseif(!ctype_digit($input_Vollerei605)){
        $Vollerei605_err = "Please enter a positive integer value.";
    } else{
        $Vollerei605 = $input_Vollerei605;
    }

    // Validate username
if(empty(trim($_POST["username"]))){
    $username_err = "Please enter a username.";
} elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
    $username_err = "Username can only contain letters, numbers, and underscores.";
} else{
    // Prepare a select statement
    $sql = "SELECT id FROM employees WHERE username = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = trim($_POST["username"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                $username_err = "This username is already taken.";
            } else{
                $username = trim($_POST["username"]);
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}

// Validate confirm password
if(empty(trim($_POST["password"]))){
    $password_err = "Please confirm password.";     
} else{
    $password = trim($_POST["password"]);
    if(empty($password_err) && ($password != $password)){
        $password_err = "Password did not match.";
    }
}
 
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($Vollerei605_err)&& empty($username_err)&& empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, Vollerei605, username, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiss", $param_name, $param_address, $param_Vollerei605, $param_username, $param_password);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_Vollerei605 = $Vollerei605;
            $param_username = $username;
            $param_password = $password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: http://localhost/shop/welcome.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>register</title>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="col-md-6 about-left">
	<img src="images/logo.png"  />	
</div>
<meta charset="utf-8" /> 
<title></title> 
<style> 
.divcss5{color:#F00} 
</style> 
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
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<h1><a href="index.php">Luca's Loaves</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center">
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.html">About</a></li>					
						<li><a href="orderonline.php">orderonline</a></li>
					
						<li><a href="register.php" class="active">registers</a></li>
                        <li><a href="upload.php">careers</a></li>
						<li><a href="contactus.html">Contact</a></li>
                        
					</ul>	
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>	
        <div class="wrapper">
            <div id="welcome" class="container">
                    <div class="container-fluid">
                    
                        <div class="row">
                            <div class="col-md-15">
                                
                                
                             <div style="color:#FFF"> <h2>Create Record</h2>   </div> 
                                
                                
                                <div style="color:#FFF"> <p>Please fill this form and submit to add employee record to the database.</p>   </div> 
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">
                                        
                                    <div style="color:#FFF"> <label for="fname">Name</label>
                                        <p>                                         </p>
                                        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                                        <span class="invalid-feedback"><?php echo $name_err;?></span>
                                    </div>
                                    <div class="form-group">

                                    <div style="color:#FFF"> <label for="fname">Address</label>
                                        <p>                                         </p>
                                        <input type="text" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>">
                                        <span class="invalid-feedback"><?php echo $address_err;?></span>
                                    </div>
                                    <div class="form-group">

                                    <div style="color:#FFF"> <label for="fname">Salary</label>
                                        <p>                                         </p>
                                        <input type="text" name="Vollerei605" class="form-control <?php echo (!empty($Vollerei605_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Vollerei605; ?>">
                                        <span class="invalid-feedback"><?php echo $Vollerei605_err;?></span>
                                    </div>
                                    <div class="form-group">

                                    <div style="color:#FFF"><label for="fname">Username</label>
                                        <p>                                         </p>
                                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                        <span class="invalid-feedback"><?php echo $username_err;?></span>
                                    </div>
                                    <div class="form-group">

                                    <div style="color:#FFF"><label for="fname">Password</label>
                                        <p>                                         </p>
                                        <input type="text" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                        <span class="invalid-feedback"><?php echo $password_err;?></span>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <p>                                         </p>
                                    <p>                                         </p>
                                    <p>                                         </p>
                                    <p>                                         </p>
                                    <p>_________________________________________</p>
                                </form>
                            </div>
                            </div>
                    
              
              
	
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