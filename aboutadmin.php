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
											<h3><a href="#">All Customer Details Listed Below</a></h3>
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
						<p class="bread"><span><a href="alladmin.php">Home</a></span> / <span>About Us</span></p>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/allheader.jpg);">
							<h2></h2>
						</div>
						<div class="menu text-center">
							<p><a href="menAdmin-all.php">MEN</a><a href="woAdmin-all.php">WOMEN</a> <a href="kidsAdmin-all.php">KIDS</a></p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	<br>
	<!-- <table border="0" align="center" width="1000"> 
		<form id="formsearch" name="formsearch" method="post" action="alladmin.php"> 
		<tr><td>Shoe's Code</td><td><input type="text" name="shoes_code" id="shoes_code"></td><td><input type="submit" value="Search"></td></tr>
	</form>
	</table>-->
	<table width="1000" align="center" border="0">
	<tr><td width="90"></td>
	<div class="col-sm-5 col-md-5">
			            <form action="allcategory.php" method="post" name="search" class="search-wrap">
			               <div class="form-group">
			                 <!-- <td width="450" align="center"> <input id="myInput" onkeyup="myFunction()" class="form-control search" placeholder="Cust's No"> -->
			               <!--   <script>
								function myFunction() 
								{
								  var input, filter, table, tr, td, i;
								  input = document.getElementById("myInput");
								  filter = input.value.toUpperCase();
								  table = document.getElementById("customer");
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
								</script></td> -->
			                 <!-- <td width="200">&nbsp;<button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button></td> -->
			                  	<!-- <td width="250" align="right"><button class="btn btn-primary submit-search text-center" type="submit" >Reset</button></td> -->
			               </div>
			            </form>
			         </div>
			     </td></tr>
</table>

<h3 align="center"><font face="Tw Cen Mt" size="7">GROUP MEMBERS :</font><img src="images/GROUPMEM.png" alt="CUSTOMER" width="80" height="80"></h3>;
	<br>
	<table border="1" align="center" width="800">
		<tr align="center">
			<td width="100" background="images/backtable.jpg"><img src="images/LBWM0828.jpg" style= "width:200px;height:200px;"></td>
			<td align="left" ><font size="5" face="Tw Cen Mt" >&nbsp;Nur Liyana Binti Rossle<br>&nbsp;<font size="4" face="Tw Cen Mt" >-Student Number: 2016698918<br>&nbsp;-NRIC Number: 980507145572<br>&nbsp;-Group: M3CS1105C<br>&nbsp;-Email: whateverworld.shut@gmail.com<br>&nbsp;-Program Code: CS110<br>&nbsp;-Program Name: Faculty of Computer and Mathematical &nbsp;Sciences</font></font></td>
		</tr>
		<tr align="center">
			<td width="100" background="images/backtable.jpg"><img src="images/RYPJ8352.jpg" style= "width:200px;height:250px;"></td>
			<td align="left" ><font size="5" face="Tw Cen Mt" >&nbsp;Shahirah Aimi Nabila Bt. Shaharum<br>&nbsp;<font size="4" face="Tw Cen Mt" >-Student Number: 2016485562<br>&nbsp;-NRIC Number: 980917565174<br>&nbsp;-Group: M3CS1105C<br>&nbsp;-Email: aimishaharum@gmail.com<br>&nbsp;-Program Code: CS110<br>&nbsp;-Program Name: Faculty of Computer and Mathematical &nbsp;Sciences</font></font></td>
		</tr>
		<tr align="center">
			<td width="100" background="images/backtable.jpg"><img src="images/TVNU5324.jpg" style= "width:150px;height:250px;"></td>
			<td align="left" ><font size="5" face="Tw Cen Mt" >&nbsp;Norsyahira Binti Ahmad Sauffi<br>&nbsp;<font size="4" face="Tw Cen Mt" >-Student Number: 2016698868<br>&nbsp;-NRIC Number: 981017045338<br>&nbsp;-Group: M3CS1105C<br>&nbsp;-Email: airawmmj98@gmail.com<br>&nbsp;-Program Code: CS110<br>&nbsp;-Program Name: Faculty of Computer and Mathematical &nbsp;Sciences</font></font></td>
		</tr>
		<tr align="center">
			<td width="300" background="images/backtable.jpg"><img src="images/HUWU1352.jpg" style= "width:200px;height:250px;"></td>
			<td align="left" ><font size="5" face="Tw Cen Mt" >&nbsp;Nurul Alieyah Binti Azam<br>&nbsp;<font size="4" face="Tw Cen Mt" >-Student Number: 2016677136<br>&nbsp;-NRIC Number: 981220045392<br>&nbsp;-Group: M3CS1105C<br>&nbsp;-Email: nurulalieyah20@gmail.com<br>&nbsp;-Program Code: CS110<br>&nbsp;-Program Name: Faculty of Computer and Mathematical &nbsp;Sciences</font></font></td>
		</tr>
		<tr align="center">
			<td width="100" background="images/backtable.jpg"><img src="images/IMG_2349.jpg" style= "width:200px;height:250px;"></td>
			<td align="left" ><font size="5" face="Tw Cen Mt" >&nbsp;Nur Anisyah Binti Badrulsham<br>&nbsp;<font size="4" face="Tw Cen Mt" >-Student Number: 2016696548<br>&nbsp;-NRIC Number: 981228435184<br>&nbsp;-Group: M3CS1105C<br>&nbsp;-Email: nuranisyahbad@gmail.com<br>&nbsp;-Program Code: CS110<br>&nbsp;-Program Name: Faculty of Computer and Mathematical &nbsp;Sciences</font></font></td>
		</tr>
	</table>


</td></tr>
</table>

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

