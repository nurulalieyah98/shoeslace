<!DOCTYPE HTML>
<html>
	<head>
	<title>SHOELACE.COM</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript">
	function myFunction() {
    var txt;
    if (confirm("Delete Item ? ")) {
        return true;
    } else {
        return false;
    }
    //document.getElementById("demo").innerHTML = txt;
	}
	</script>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="alladmin.php">SHOELACE.COM</a></div>
						</div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
														<ul>
								<li class="active"><a href="alladmin.php">Home</a></li>
								<li class="has-dropdown">
								<a>Categories</a>
								<ul class="dropdown">
										<li><a href="allcategory.php">All</a></li>
										<li><a href="menAdmin-all.php">Men</a></li>
										<li><a href="woAdmin-all.php">Women</a></li>
										<li><a href="kidsAdmin-all.php">Kids</a></li>
								</ul>
								</li>
								<!-- <li class="has-dropdown">
								<a>Login</a>
									<ul class="dropdown">
										<li><a href="loginadmin.html">Admin</a></li>
										<li><a href="logincustomer.html">Customer</a></li>
									</ul>
								</li> -->
								<li><a href="contact.html">Logout</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">ANNOUNCEMENT!</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">All Details Listed Below</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="addadmin.php">Add Items</a></span> / <span>Men</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/mensheader.jpg);">
							<h2></h2>
						</div>
						<div class="menu text-center">
							<p><a href="menAdmin-all.php">ALL TYPES</a><a href="menAdmin-lowtop.php">Low Top</a> <a href="menAdmin-midtop.php">Mid Top</a> <a href="menAdmin-hightop.php">High Top</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	<h1 align="center"><font face="Tw Cen Mt">MID TOP</font></h1>
	<table border="1" align="center" width="900">
		<tr align="center"><th height="60" background="images/backtable.jpg"><font color="white">No.</font></th><th height="60" background="images/backtable.jpg"><font color="white">Shoe's Code</font></th><th background="images/backtable.jpg"><font color="white">Name</font></th><th background="images/backtable.jpg"><font color="white">Colour</font></th><th background="images/backtable.jpg"><font color="white">Brand</font></th><th background="images/backtable.jpg"><font color="white">Category</font></th><th background="images/backtable.jpg"><font color="white">Type</font></th><th background="images/backtable.jpg"><font color="white">Price (RM)</font></th><th background="images/backtable.jpg"><font color="white">Quantity</font></th>

			<th background="images/backtable.jpg"><font color="white">Image</font><th background="images/backtable.jpg"><font color="white">Edit Item</font><th background="images/backtable.jpg"><font color="white">Delete Item</font>

<?php
	$men="Men";
	$type="Mid Top";
	include "dbcon.php";
	$sql = "SELECT shoes_code, shoes_name, shoes_colour, shoes_brand, shoes_category, shoes_price, shoes_qty, shoes_image FROM shoes WHERE shoes_category='$men' AND shoes_type='$type' ORDER BY shoes_code";

	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
        Print '<tr align="center">
                  <td height="66">'.$row['shoes_code'].'</td>
                  <td>'.$row['shoes_name'].'</td>
				  <td>'.$row['shoes_colour'].'</td>
				  <td>'.$row['shoes_brand'].'</td>
				  <td>'.$row['shoes_category'].'</td>
				  <td>'.$row['shoes_price'].'</td>
                  <td>'.$row['shoes_qty'].'</td>

                  <td><img src="'.$row['shoes_image'].'" style= "width:128px;height:128px;"></td>
                  <td><a href="editcategory.php?shoes_code='.$row['shoes_code'].'"><img src="images/btn_edit.gif" width="17" height="17" onclick="return myFuntion();" /></a></td>
                  <td><a href="delete-menAdmin-midtop.php?shoes_code='.$row['shoes_code'].'"><img src="images/btn_delete.gif" width="17" height="17"onclick="return myFunction();"/></a></td>
                </tr>';		   
	}
	
echo "</table>";
echo "&nbsp;";
?>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

