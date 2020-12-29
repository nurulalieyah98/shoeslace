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
		<br>
	<br>
	<!-- <table border="0" align="center" width="1000"> 
		<form id="formsearch" name="formsearch" method="post" action="alladmin.php"> 
		<tr><td>Shoe's Code</td><td><input type="text" name="shoes_code" id="shoes_code"></td><td><input type="submit" value="Search"></td></tr>
	</form>
	</table>-->
	<table width="800" align="center" border="0">
	<tr><td width="90"></td>
	<div class="col-sm-5 col-md-5">
			            <form action="alladmin.php" method="post" name="search" class="search-wrap">
			               <div class="form-group">
			                 <td width="450" align="center"> <input id="myInput" onkeyup="myFunction()" class="form-control search" placeholder="Search">
			                 <script>
								function myFunction() 
								{
								  var input, filter, table, tr, td, i;
								  input = document.getElementById("myInput");
								  filter = input.value.toUpperCase();
								  table = document.getElementById("content");
								  tr = table.getElementsByTagName("tr");
								  for (i = 0; i < tr.length; i++) 
								  {
									td = tr[i].getElementsByTagName("td")[1];
									if (td) 
									{
									  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
									  {
										tr[i].style.display = "";
									  } 
									  else 
									  {
										tr[i].style.display = "none";
									  }
									}       
								  }
								}
								</script></td>
			                 <td width="200">&nbsp;<button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button></td>
			                  	<!-- <td width="250" align="right"><button class="btn btn-primary submit-search text-center" type="submit" >Reset</button></td> -->
			               </div>
			            </form>
			         </div>
			     </td></tr>
</table>
<br>
	<table border="0" align="center">
		<tr><td><h6>Click on <img src="images/arrow.png" width="17" height="17"> to direct to a page</h6></td></tr>
	</table>
	<table border="1" align="center" width="800" id="content">
		<tr align="center">
			<th height="60" background="images/backtable.jpg"><font color="white">&nbsp;</font></th>
			<th height="60" background="images/backtable.jpg"><font color="white">Content</font></th>
			<th background="images/backtable.jpg"><font color="white">&nbsp;</font></th>
		</tr>
		<tr align="center"><td width="100"><img src="images/admin.png" height="50" width="50"></td><td><font size="5"><b>Admin Details</b></font><br><font size="2">-Check and Update Admin's Information-</font></td>



<?php

		 include "dbcon.php";
		 $id=$_GET['admin_id'];
		 $sql = "SELECT * FROM admin";
		 $results = mysqli_query($connection, $sql);
		

	
	echo "<td><a href='admindetail.php'><img src='images/arrow.png' width='30' height='30'/></a></td></tr>";

	echo "<tr align='center'><td><img src='images/additem2.png' width='50' height='50'></td><td><font size='5'><b>Add Item</b></font><br><font size='2'>-Add more shoes to stock-</font></td><td><a href='addadmin.php'><img src='images/arrow.png' width='30' height='30'></a></td></tr>";
	echo "<tr align='center'><td><img src='images/list.png' width='50' height='50'></td><td><font size='5'><b>All Categories</b></font><br><font size='2'>-Check and Update Items in all categories[Men, Women, Kids]-</b></font></td><td><a href='allcategory.php'><img src='images/arrow.png' width='30' height='30'></a></td></tr> ";
	echo "<tr align='center'><td><img src='images/custadmin.png' width='50' height='50'></td><td><font size='5'><b>Customer's Details</b></font><br><font size='2'>-Check customer's personal information and payment-</b></font></td><td><a href=''><a href='allcustomerinfo.php'><img src='images/arrow.png' width='30' height='30'></a></td></tr>";
	echo "<tr align='center'><td><img src='images/GROUPMEM.png' width='50' height='50'></td><td><font size='5'><b>About Us</b></font><br><font size='2'>-Group members' details-</b></font></td><td><a href=''><a href='aboutadmin.php'><img src='images/arrow.png' width='30' height='30'></a></td></tr>";

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

