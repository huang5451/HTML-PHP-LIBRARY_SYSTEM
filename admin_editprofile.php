<!--Programmer Name: Mr. Yong Zong Huang, UCDF2104ICT(SE) Student-->
<!--Program Name: admin_editprofile.php-->
<!--Description: this page allow admin edit his's profile page-->
<!--First Written On: Tuesday, 7-March-2023-->
<!--Edited On: Monday, 13-March-2023-->

<?php
        session_start();
        if (!empty($_SESSION["staffemail"])){
	        echo '<br>Admin Email: ' . $_SESSION["staffemail"];
        } else{
	        echo ' <br>Welcome Guest,';
        }
        ?>
<?php
include 'dbconnection.php' ;  
$id1=$_GET['id'];
echo $id1;
    
if (isset($_POST['btnUpdate'])){
        $fname = $_POST['txtFname'];
        $lname = $_POST['txtLname'];
        $age = $_POST['txtAge'];
        $gender= $_POST['gender'];
        $email = $_POST['txtEmail'];
        $password= $_POST['txtPassword'];
        $position= $_POST['txtPosition'];;
        $UpdateQuery = "UPDATE `admin_table` SET `first name`='$fname',`last name`='$lname',`age`='$age',`gender`='$gender',`email`='$email',`password`='$password',`position`='$position' WHERE `email`='$id1'";
        if(mysqli_query($connection, $UpdateQuery)){
            echo 'Successfully Updated! ';
            header('Location: admin_viewprofile.php');
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
    	<title>High Performance Library System</title>
    	<link rel="shortcut icon" href="logo.png"/>
		<link href="website_settings.css" rel="stylesheet" type="text/css"/>
		<script src="aa06e83e4b.js"></script>
    	<link rel="stylesheet" href="ionicons.min.css"/>
    	<link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
						
.body1
	{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(old_man_bg.jpg);
	background-size: cover;

	
	}


#innercontent{
            width:1400px;
            height:1000px;
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
    background-color:yellow;
	margin-left:0px;
    text-align:center;
	margin-top: -300px;
}
</style>

</head>

<body class="body1">
   
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
                    <h2>Admin Edit Profile</h2>
                    <span class="underline center"></span>
                    <p class="lead">Welcome to Admin Page</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="admin_homepage.php">Admin Home</a></li>
                        <li><a href="admin_viewprofile.php">Profile Page</a></li>
                        <li>Edit Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <div id="content1">
            <div id="innercontent">

            <h2> Edit Profile</h2>
            <br>
            <?php
        $query = "SELECT * FROM admin_table WHERE `email` = '$id1'";
        $result = mysqli_query($connection,$query) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        ?>

      <form action = "#" method ="post">
          <h2>First Name: <input type="text" name="txtFname" style ="font-size: 20px" value="<?php echo $row['first name']; ?>"><br></h2>
          <br>
          <h2>Last Name: <input type="text" name="txtLname" style ="font-size: 20px" value="<?php echo $row['last name']; ?>"><br></h2>
          <br>
          <h2>Age: <input type="text" name="txtAge" style ="font-size: 20px" value="<?php echo $row['age']; ?>"><br></h2>
          <br>
          <h2>Gender: <br></h2>
          <label>
              <?php $gender = $row['gender'];?>
              <h2><input type="radio" name="gender" style ="font-size: 20px" value="Male" <?php if ($gender != "Female") echo "checked";?>> Male</h2>
          </label><br>
          <br><label>
              <h2><input type="radio" name="gender" style ="font-size: 20px" value="Female"<?php if ($gender != "Male") echo "checked";?>> Female</h2>
          </label><br>
          <br>
          <h2>Email: <input type="email" name="txtEmail" style ="font-size: 20px" value="<?php echo $row['email']; ?>"><br></h2>
          <br>
          <h2>Password: <input type="text" name="txtPassword" style ="font-size: 20px" value="<?php echo $row['password']; ?>"><br></h2>
          <br>
          <h2>Position: <input type="text" name="txtPosition" style ="font-size: 20px" value="<?php echo $row['position']; ?>"><br></h2>
          <br>
          <input type="submit" value="Update" style ="font-size: 20px" name="btnUpdate">
      </form>

        <?php mysqli_close($connection); ?>
    
            </div>                                         
        </div>
    
</body>
</html>