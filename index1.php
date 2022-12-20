<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Aboutus</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
           <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="aboutus.php">Aboutus <span class="sr-only"></span></a> </li>
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
							}
						else
							{
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <br/>
        <br/>
        <br/>
        <br/><center>
            <h1>Welcome to MARKETING page</h1>
        <h4> Share the below landing page link of FOOD PICKY to the potential customers through social media</h2>
        <br/>
        
        <h5>And share on different social media platforms with your referal code</h5>
        <label for="code"><b>Your Referal code : </b></label>
        <input type="text" placeholder="Enter your Referal code" name="code" id="code" required><br/>
        <label for="link"><b>Copy the Link with referal code</b></label>
        <input type="text" value="https/food-picky.com/" placeholder="enter referal code" name="Link" id="link">
                <h3>Share through Social Media</h3>
                <h4>
                <a href="https://www.facebook.com/login/" target="_blank">
                    facebook</a><br/>
                <a href="https://www.linkedin.com/login/" target="_blank">
                    linkedIn</a><br/>
                <a href="https://www.github.com/login/" target="_blank"> github</a><br/>
                <a href="https://twitter.com/login" target="_blank">twitter</a><br/>
                <a href="https://www.instagram.com/login" target="_blank">
                    instagram</a><br/>
                        </h4>
            <label for="comm"><b>Your Commission count : </b></label>
        <input type="text" value="0" name="comm" id="comm" >
                
                        </center>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>