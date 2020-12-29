<!DOCTYPE HTML>
<html>
	<head>
	<title>SHOELACE.COM</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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

	</head>
	<body>
		
<?php
		 $code = $_GET['shoes_code'];	
		 include "dbcon.php";
		 $query = "SELECT * FROM shoes WHERE shoes_code='$code'";

		 $r = mysqli_query($connection,$query);
		 
		 $results = mysqli_fetch_assoc($r);
?>

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
											<h3><a href="#">Announcement! </a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">To Add Items, click Add Items Tab</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form action="editcategory_php.php?shoes_code=<?php echo $code;?>" method="post" name="form1" enctype="multipart/form-data">
						<h1>Edit Item <?=$results['shoes_code'];?></h1>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<form action="#" class="contact-form">
								<div class="row">
									<div class="col-md-9">
										<div class="form-group">
											<label for="shoes_code">Code</label>
											<input type="text" id="shoes_code" name="shoes_code" value='<?=$results['shoes_code'];?>' class="form-control" disabled>
										</div>
									</div>
									<div class="col-md-9">
										<div class="form-group">
											<label for="shoes_name">Name</label>
											<input type="text" id="shoes_name" name="shoes_name" value='<?=$results['shoes_name'];?>' class="form-control">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">Colour</label>
											<input type="text" id="shoes_colour" name="shoes_colour"  value='<?=$results['shoes_colour'];?>' class="form-control" >
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="shoes_brand">Brand</label>
											<input type="text" id="shoes_brand" name="shoes_brand" value='<?=$results['shoes_brand'];?>' class="form-control">
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group"><label for="shoes_category">Category</label><br>
										<select name="shoes_category" id="shoes_category">-Choose-
											<option value="<?php echo $results['shoes_category'];?>">-<?php echo $results['shoes_category'];?>-</option>
										<option value="Men">Men</option>
										<option value="Women">Women</option>
										<option value="Kids">Kids</option>
										</select>
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group"><label for="shoes_type">Type</label><br>
										<select name="shoes_type" id="shoes_type">-Choose-
											<option value="<?php echo $results['shoes_type'];?>">-<?php echo $results['shoes_type'];?>-</option>
										<option value="High Top">High Top</option>
										<option value="Mid Top">Mid Top</option>
										<option value="Low Top">Low Top</option>
										</select>
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="shoes_price">Price</label>
											<input type="text" id="shoes_price" name="shoes_price" value='<?=$results['shoes_price'];?>' class="form-control">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="shoes_qty">Quantity</label>
											<input type="number" id="shoes_qty" name="shoes_qty" value='<?=$results['shoes_qty'];?>' class="form-control">
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="shoes_image">CHOOSE IMAGE</label>
										</div>
										</div>
									
									 	<input type="file" name="shoes_image" id="shoes_image" align="left" value='<?=$results['shoes_image'];?>'>

									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group" align="center">
											<input type="submit" value="Edit Item" class="btn btn-primary">
										</div>

									</div>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>


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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

