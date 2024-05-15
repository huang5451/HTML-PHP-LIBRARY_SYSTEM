<!--Programmer Name: Mr. Yong Zong Huang,  UCDF2104ICT(SE) Student-->
<!--Program Name: user_bookpage.php-->
<!--Description: this page allow user can see book detail and decided borrow or add cart.-->
<!--First Written On: Friday, 10-March-2023-->
<!--Edited On: Sunday, 12-March-2023-->

<?php
error_reporting(0);
session_start();
if (!empty($_SESSION["useremail"])){
	echo '<br>User IC: ' . $_SESSION["useremail"];
} else{ 
	echo ' <br>Welcome Guest,';
}
?>

<?php
  include('dbconnection.php');
  $id1=$_GET['id'];
  $email=$_SESSION["useremail"];
  $bookname=$_POST['txtBN'];
  $price=$_POST['txtPrice'];
  $bookname=$_POST['txtBN'];
  $status='Not Returned';
  $bdays=$_POST['time'];    
  if (isset($_POST['btnBorrow'])){


    
    $UpdateQuery = "INSERT INTO `borrow_table`( `email`, `book name`, `borrow days`, `status`, `price`) VALUES ('$email','$bookname','$bdays','$status','$price')";
    if(mysqli_query($connection, $UpdateQuery)){
            echo 'Successfully Borrow! ';
        }else{
            echo'Failed to update';
        }
    
    
    $UpdateQuery2 = "UPDATE `book_table` SET  `status`='Not available' WHERE `id`='$id1'";
    if(mysqli_query($connection, $UpdateQuery2)){
            echo 'Successfully Updated! ';
            header('Location: user_viewallbook.php');
        }else{
            echo'Failed to update';
        }
    
    }

if (isset($_POST['btnCart'])){$UpdateQuery3 = "INSERT INTO `cart_table` ( `email`, `book name`, `borrow days`, `price`) VALUES ('$email','$bookname','$bdays','$price')";
    if(mysqli_query($connection, $UpdateQuery3)){
            echo 'Successfully Updated! ';
            header('Location: user_viewallbook.php');
            
        }else{
            echo'Failed to update';
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>. HIGH PERFORMANCE LIBRARY SYSTEM .</title>
        
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
		<meta charset="UTF-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="shortcut icon" href="logo.png"/>
		<link href="website_settings.css" rel="stylesheet" type="text/css"/>
		<script src="aa06e83e4b.js"></script>
    	<link rel="stylesheet" href="ionicons.min.css"/>
    	<link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
						
.body1
	{
        background: #dae1ed;

	
	}


#innercontent{
            width:1400px;
            height:700px;
            text-align:center;
            }

#box1{
    width:650px;
    height: 300px;
    background-color:orange;
    margin-top:0px;
    text-align:center;
}

#box2{
    width:650px;
    height:300px;
    background-color:green;
    margin-left:700px;
    margin-top:-300px;
    text-align:center;
}

#box3{
    width:650px;
    height:300px;
    background-color:pink;
	margin-left:700px;
    margin-top: 50px;
    text-align:center;
}

#box4{
    width:650px;
    height:300px;
    background-color:grey;
	margin-left:0px;
    text-align:center;
	margin-top: -300px;
}
</style>

</head>

<body class="body1">
   
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
                    <h2>Each Book Page</h2>
                    <span class="underline center"></span>
                    <p class="lead">This page allow user view description and borrow book.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home Page</a></li>
                        <li>Book Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
    
            <div id="innercontent">
            <br/><br/>
            <h2><font color="black">Book Page</font></h2>
			<br/>
            <br/>
            <div id = "content1">
            <?php
            $query = "SELECT * FROM book_table WHERE `id` = '$id1'";
            $result = mysqli_query($connection,$query) or die(mysqli_error());
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action = "#" method ="post">
            <img src='<?php echo $row['img']; ?>' width='100px' height='100px'> 
            <br/><br/>
            Book Name: <input type="text" name="txtBN" readonly="readonly" value="<?php echo $row['book name']; ?>"><br/><br/>
            Author: <?php echo $row['author']; ?><br/><br/>
            Price: <input type="text" name="txtPrice" readonly="readonly" value="<?php echo $row['price']; ?>"><br/><br/>
            Page: <?php echo $row['page']; ?><br/><br/>
            Publication Date: <?php echo $row['publication date']; ?><br/><br/>
            Description: <?php echo $row['description']; ?><br/><br/>
            ISBN: <?php echo $row['isbn']; ?><br/><br/>
            Status: <?php echo $row['status']; ?><br/><br/>
            
            <label for="time">Please Choose a Time for borrow:</label>
                <select name="time" >
                    <option value="7 days">7 Days</option>
                    <option value="14 days">14 Days</option>
                </select> 
            <br/><br/>
            <input type="submit" value="Borrow" name="btnBorrow">
            <input type="submit" value="Add To Cart" name="btnCart">
        </form>
                                            
                                            
    <?php mysqli_close($connection); ?>
        
     </div>
    
</body>
</html>