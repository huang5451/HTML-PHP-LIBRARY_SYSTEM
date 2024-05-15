<!--Programmer Name: Mr. Yong Zong Huang,  UCDF2104ICT(SE) Student-->
<!--Program Name: index.php-->
<!--Description: this page allow our page can let user see all function in our system and beautiful design attract the user.-->
<!--First Written On: Saturday, 4-March-2023-->
<!--Edited On: Monday, 13-March-2023-->

<?php
        session_start();
        if (!empty($_SESSION["useremail"])){
	        echo '<br>User Email: ' . $_SESSION["useremail"];
        } else{
	        echo ' <br>Welcome Guest,';
        }
        ?>
<?php
include 'dbconnection.php' ;  
?>

<!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>High Performance Library System</title>
        
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
    </head>
    
    <body>
        
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
        
        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Online Learning Anytime, Anywhere!</h3>
                            <h2>Welcome to High Performance Library System</h2>
                            <p>
                            Our system also includes a range of innovative tools and services, such as personalized recommendations, social media integration, and mobile access, to help libraries engage with their users and foster a sense of community. Whether you're a student, researcher, or casual reader, our system has something to offer everyone.</p>
                            <div class="slide-buttons hidden-sm hidden-xs">    
                                <a href="user_services.php" class="btn btn-primary">Read More</a>
                                <a href="user_viewallbook.php" class="btn btn-default">View All Book</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Online Learning Anytime, Anywhere!</h3>
                            <h2>Latest Techonologies</h2>
                            <p>Our system is built on the latest technologies, including cloud computing, machine learning, and big data analytics, to deliver unparalleled speed, reliability, and scalability. With our high performance architecture, libraries can handle even the largest collections and the most complex queries with ease, ensuring that patrons can always find the resources they need quickly and easily.</p>
                            <div class="slide-buttons hidden-sm hidden-xs">    
                            <a href="user_services.php" class="btn btn-primary">Read More</a>
                                <a href="user_viewallbook.php" class="btn btn-default">View All Book</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="images/header-slider/home-v1/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Our system supported user borrow book in this website</h3>
                            <h2>Try Now!!!</h2>
                            <p></p>
                            <div class="slide-buttons hidden-sm hidden-xs">    
                                <a href="user_services.php" class="btn btn-primary">Read More</a>
                                <a href="user_viewallbook.php" class="btn btn-default">View All Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->
        
        
        
        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Welcome to the High Performance Library System</h2>
                                <span class="underline left"></span>
                                <p class="lead"><font size=4>Welcome to our high performance library system, designed to meet the needs of modern libraries and their patrons. Our system offers a robust set of features and capabilities that empower librarians to manage their collections more efficiently and effectively, while providing a seamless and intuitive experience for library users.
                                <br><br>     
                                We're proud to offer this state-of-the-art library system, and we're confident that it will help libraries and their users thrive in the digital age. Thank you for considering our high performance library system, and we look forward to serving you.</font></p>
                                <br>
                                <a class="btn btn-primary" href="user_login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->
        
        <!-- Start: Category Filter -->
        <?php if (!empty($_SESSION["useremail"])){?>
											
  

  										
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Check Out The New Releases</h2>
                            <span class="underline center"></span>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">
                    <div class="filter btn" data-filter="all">All Releases</div>
                    <div class="filter btn" data-filter=".adults">Adults</div>
                    <div class="filter btn" data-filter=".kids-teens">Kids</div>
                    <div class="filter btn" data-filter=".video">Music</div>
                    <div class="filter btn" data-filter=".cooks">Cook</div>
                    <div class="filter btn" data-filter=".history">History</div>
                </div>
            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <li class="category-item video">
                        <figure>
                            <img height="130px"src="img_book11.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>	The Sonic Boom: How Sound Transforms the Way We Think, Feel, and Buy</h4>
                                    <span class="author"><strong>Author:</strong> 	Joel Beckerman</span>
                                    <span class="author"><strong>ISBN:</strong> 978-0544570160</span>
                                    <p>	"Music defines us. Joel Beckerman knows. Let him tell you all about it." —Anthony Bourdain</p>
                                    <a href="user_bookpage.php?id=1">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item adults">
                        <figure>
                            <img src="img_book22.jpg" alt="New Releaase"  />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 978-1982146702</span>
                                    <p>The only authorized mass market edition of the twentieth-century classic.</p>
                                    <a href="user_bookpage.php?id=4">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="img_book2.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>abc English: Book One</h4>
                                    <span class="author"><strong>Author:</strong> Jennifer Christenson</span>
                                    <span class="author"><strong>ISBN:</strong> 978-1490393476</span>
                                    <p>This book was discontinued in December 2021. Programs are encouraged to try out the new.</p>
                                    <a href="user_bookpage.php?id=2">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item cooks">
                        <figure>
                            <img src="img_book3.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Ottolenghi Simple: A Cookbook</h4>
                                    <span class="author"><strong>Author:</strong>Yotam Ottolenghi</span>
                                    <span class="author"><strong>ISBN:</strong> 978-1607749165</span>
                                    <p>With more than 130 photographs, this is elemental Ottolenghi for everyone.</p>
                                    <a href="user_bookpage.php?id=5">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item history">
                        <figure>
                            <img src="img_book4.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Forgotten 500</h4>
                                    <span class="author"><strong>Author:</strong>Gregory A. Freeman</span>
                                    <span class="author"><strong>ISBN:</strong> 978-0451224958</span>
                                    <p>	The astonishing, never before told story of the greatest rescue mission of World War II</p>
                                    <a href="user_bookpage.php?id=6">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="img_book5.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Love You Forever</h4>
                                    <span class="author"><strong>Author:</strong> Robert Munsch</span>
                                    <span class="author"><strong>ISBN:</strong>978-0920668375</span>
                                    <p>A young woman holds her newborn son And looks at him lovingly.</p>
                                    <a href="user_bookpage.php?id=6"">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <div class="center-content">
                    <a href="user_viewallbook.php" class="btn btn-primary">View More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- Start: Category Filter -->
        
        <!-- Start: Features -->
        <section class="features">
            <div class="container">
                <ul>
                    <li class="bg-yellow">
                        <div class="feature-box">
                            <i class="yellow"></i>
                            <h3>Books</h3>
                            <p>Allow User view all book in the library! </p>
                            <a class="yellow" href="user_viewallbook.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-light-green">
                        <div class="feature-box">
                            <i class="light-green"></i>
                            <h3>Search</h3>
                            <p>You can search book name you want in this function!</p>
                            <a class="light-green" href="user_search.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-blue">
                        <div class="feature-box">
                            <i class="blue"></i>
                            <h3>Meeting Room</h3>
                            <p>You can book meeting room in this library to have a meeting with your friends or colleague!</p>
                            <a class="blue" href="user_bookmeeting.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-red">
                        <div class="feature-box">
                            <i class="red"></i>
                            <h3>View Your Booking</h3>
                            <p>You can check status of meeting room you booked confirm or not!  </p>
                            <a class="red" href="user_viewmeeting.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-violet">
                        <div class="feature-box">
                            <i class="violet"></i>
                            <h3>View Your Borrow</h3>
                            <p>You can see your status of borrow book!</p>
                            <a class="violet" href="user_viewborrow.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="bg-green">
                        <div class="feature-box">
                            <i class="green"></i>
                            <h3>Location</h3>
                            <p>You can see the avaialble time and date of the library.</p>
                            <a class="green" href="user_location.php">
                                View Selection <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Features -->
        <?php } else {?>
								  
  		<?php }?>	
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