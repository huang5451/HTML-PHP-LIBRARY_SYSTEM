<!--Programmer Name: Mr. Yong Zong Huang, UCDF2104ICT(SE) Student-->
<!--Program Name: admin_signup.php-->
<!--Description: this page allow admin signup the system-->
<!--First Written On: Sunday, 5-March-2023-->
<!--Edited On: Monday, 13-March-2023-->
<?php
session_start();
if (!empty($_SESSION["staffemail"])){
	echo '<br>admin email: ' . $_SESSION["staffemail"];
} else{
	echo ' <br>Welcome Guest,';
}
?>

<!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>..:: HIGH PERFORMANCE LIBRARY SYSTEM ::..</title>
        
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
<style>
            #innercontent{
            width:1400px;
            height:400px;
            text-align:center;
            }

            .body1
            {
	        background: grey;;
            }
	        
</style>
    </head>


    <body class="body1">
    
        <!-- Start: Header Section -->
        
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
				<br>
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="admin_homepage.php">
                                                <img src="logo2.jpg" alt="High Performance Library System" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+60 18 772222</a>
                                                <span>/</span>
                                                <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>SUPPORT@HPLS.com</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
										<?php if (!empty($_SESSION["staffemail"])){?>
											<div class="topbar-links">
										<a href="admin_viewprofile.php"><i class="fa fa-lock"></i>Profile /</a>
                                        <a href="admin_logout.php"><i class="fa fa-lock"></i>Logout</a>
											</div>
  

  										<?php } else {?>
											<div class="topbar-links">
										<a href="admin_login.php"><i class="fa fa-lock"></i>Login /</a>
                                        <a href="admin_signup.php"><i class="fa fa-lock"></i> Register</a>
											</div>
                                        </div>
  										<?php }?>	
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="admin_homepage.php">Home</a>
                                        <ul>
                                            <li><a href="admin_viewalluser.php">View All User</a></li>
                                            <li><a href="admin_viewallbook.php">View All Book</a></li>
                                            <li><a href="admin_recorduser.php">Record</a></li>
											<li><a href="admin_viewmr.php">Meeting Room</a></li>
                                            <li><a href="admin_viewmoney.php">Compensation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Sign Up</h2>
                    <span class="underline center"></span>
                    <p class="lead">This page is allow admin sign up account to access the system.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="admin_homepage.php">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
 
        <div id="innercontent">
        <br/><br/>
    
        <?php echo ' <h2>Registration </h2>';?>
        <br/>
        <form action="#" method="get">
        First Name:<br/>
		<input type="text" name="txtFname" /> <br/>
        Last Name:<br/>
		<input type="text" name="txtLname" /> <br/>
        Age:<br/>
        <input type="text" name="txtAge"/> <br/>
		Gender 
                <label>
                <input type="radio" name="gender" value="Male" >Male<br/>
                </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
                <input type="radio" name="gender" value="Female">Female <br/>
                </label>
        <br/>
		Email :<br/>
		<input type="gmail" name="txtEmail"/><br/>
        Password :<br/>
		<input type="password" name="txtPassword"/> <br/>
		Confirm Password :<br/>
		<input type="password" name="txtPassword2"/> <br/>
        Position:<br/>
        <input type="text" name="txtPosition"/> <br/>
		<br/>
        <input type="checkbox" required:"required" name="chk4"/> Before you sign up, need agree Terms of Service & Privacy Policy<br/>
        <br/>
        <input type="submit" value="Register" name="btnRegister"/>
        <input type="reset" value="Clear"/>
    </form>
   
    <?php
  include('dbconnection.php');
  if(isset($_GET['btnRegister'])){
  $fname=$_GET['txtFname'];
  $lname=$_GET['txtLname'];
  $age=$_GET['txtAge'];
  $gender=$_GET['gender'];
  $email=$_GET['txtEmail'];
  $password=$_GET['txtPassword'];
  $password2=$_GET['txtPassword2'];
  $position=$_GET['txtPosition'];
  
  if(trim($fname) ==''){
    echo ' PLease enter all information to register</br>';
  }
  $sqlQuery =" INSERT INTO `admin_table`(`first name`,`last name`, `age`, `gender`,`email`, `password`, `position`) 
  VALUES ('$fname','$lname','$age','$gender','$email','$password','$position')";
  if(mysqli_query($connection,$sqlQuery)){
    echo ' successfully registered!!';
  //header('Location: .php');
  } else{
    echo'Failed to register';
  }
}
?>

					
	</form>

</div>
     




        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            
        </div>
        <!-- End: Cart Section -->
        
        <!-- Start: Social Network -->
        <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    
                
            </div>
        </section>
        <!-- End: Social Network -->
        
        
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>
