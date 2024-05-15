<!--Programmer Name: Mr. Yong Zong Huang, UCDF2104ICT(SE) Student-->
<!--Program Name: user_signup.php-->
<!--Description: this page allow user sign up his account in library system-->
<!--First Written On: Friday, 10-March-2023-->
<!--Edited On: Friday, 10-March-2023-->

<?php
    error_reporting(0);
    session_start();
    if (!empty($_SESSION["useremail"])){
	    echo '<br>User Email: ' . $_SESSION["useremail"];
    } else{
	    echo ' <br>Welcome Guest,';
    }
?>

<?php
include 'dbconnection.php';

    $id1=$_SESSION["useremail"];

    $sqlQuery ="SELECT * From book_table";
    $result=mysqli_query($connection,$sqlQuery);

    mysqli_close($connection);
    
   
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
            height:1000px;
            text-align:center;
            }
            
            .body1
            {
	        background:#dae1ed ;
            }
	        
            #content3{
            width:1400px;
           
            }

            #content4{
            margin-top: 20px;
            }
	        
        </style>
    </head>


    <body class="body1">
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <br><br>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index.php">
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
                                                <a href="tel:+60-0172223333"><i class="fa fa-phone"></i>+60-0172223333</a>
                                                <span>/</span>
                                                <a href="mailto:support@HPLB.com"><i class="fa fa-envelope"></i>SUPPORT@HPLB.com</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <?php if (!empty($_SESSION["useremail"])){?>
											<div class="topbar-links">
										<a href="user_viewprofile.php"><i class="fa fa-lock"></i>Profile /</a>
                                        <a href="user_logout.php">Logout</a>
                                        <a href="user_cart.php" class="dropdown-toggle" >
                                         <i class="fa fa-shopping-cart"></i>
                                                    </a>
											</div>
  

  										<?php } else {?>
											<div class="topbar-links">
										<a href="user_login.php"><i class="fa fa-lock"></i>Login /</a>
                                        <a href="user_signup.php">Register</a>
											</div>
                                        
  										<?php }?>	
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="user_viewallbook.php">Books</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="user_search.php">Search book</a></li>
                                                <li><a href="user_search_category.php">Choose Genres</a></li>
                                                <li><a href="user_scan.php">Scan barcode</a></li>
                                            </ul>
                                        </li>
                                        <?php if (!empty($_SESSION["useremail"])){?>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href=#>Function</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="user_viewborrow.php">View Your Borrow status</a></li>
                                                <li><a href="user_viewmeeting.php">View Your Booking status</a></li>
                                                <li><a href="user_bookmeeting.php">Booking Meeting Room</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="user_viewprofile.php">Your Profile</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="user_cart.php">Cart</a></li>
                                                <li><a href="user_viewprofile.php">Profile</a></li>
                                                <li><a href="user_logout.php">Log Out</a></li>
                                            </ul>
                                        </li>
                                        <?php } else {?>
                                        <?php }?>
                                        <li><a href="user_services.php">Services</a></li>
                                        <li><a href="user_location.php">Location</a></li>
                                    </ul>
                                </div>
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
                    <h2>All Book Page</h2>
                    <span class="underline center"></span>
                    <p class="lead">This page allow user view all book</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>View All book</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="innercontent">
        <br/><br/>
        <h2><font color="black">All Book </font></h2>
            <br/>
			<h2><font color="black">Click book id to see book detail!</font></h2>
            <br/>
        <div id = "content1">
        <table border="1" cellspacing="1" cellpading="1" id=table1>
        <tr>
        <th>Book_ID</th>
            <th>Book Name</th>
            <th>Image</th>
            <th>Author Name</th>
            <th>Price (RM)</th>
            <th>Pages</th>
            <th>Publication Date</th>
            <th>Description</th>
            <th>ISBN</th>
            <th>Status of the book</th>
        </tr>
        
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><a href="user_bookpage.php?id=<?php echo $row['id']; ?>"><?php echo $row['id'];?> </td>
                <td> <?php echo $row['book name']; ?>   </td>
                <td> <img src='<?php echo $row['img']; ?>' width='110px' height='100px'>   </td>
                <td> <?php echo $row['author']; ?>   </td>
                <td> <?php echo $row['price']; ?>   </td>
                <td> <?php echo $row['page']; ?>   </td>
                <td> <?php echo $row['publication date']; ?>   </td>
                <td> <?php echo $row['description']; ?>   </td>
                <td> <?php echo $row['isbn']; ?>   </td>
                <td> <?php echo $row['status']; ?>   </td>  
            </tr> 
        <?php }?>
        </table>
        </div>
   

</div>

                                        
       
        <!-- End: Cart Section -->
        
        <!-- Start: Social Network -->

        <!-- End: Social Network -->
        
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About High Performance Library System</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                We are the World Wide University student, our system is provided to every student and lecturer can access it and study easily. Then we wish all student to make full use of the library system and its resources to enhance their learning experience. 
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>121 King Street, Kuala Lumpur, Malaysia</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@HPLB.com">SUPPORT@HPLB.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:0172223333">+ 60-0172223333</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="user_viewallbook.php">All Book</a></li>
                                        <li><a href="user_search.php">Search</a></li>
                                        <li><a href="user_services.php">Meet Our Staff</a></li>
                                        <li><a href="user_location.php">Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Timing</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2023-03-13">Tue - Sun: 8 am - 12 pm</time>
                                    <time datetime="2023-03-13">Mon: 8 am - 6 pm</time>
                                    <ul>
                                        <li><a href="user_location.php">Location</a></li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest Tweets</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@High Performance Library System</a> This Twitter will upload new status of library let user always know what new book or news. </a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@World Wide University</a> This Twitter will upload new status of university let user always know what news. </a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>                
            </div>
            
        </footer>
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
