<!DOCTYPE html>
<?php include("inc/functions.php");?>
<html>
	<head>
		<title>My Online Shop</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
<body>
	<!-- main container starts here-->
	<div class="main_wrapper">
		<!--header starts here-->
		<div class="header_wrapper">
			<img id="logo" src="images/logo1.gif" />
			<img id="banner" src="images/logo.gif" />

			<!--navigation starts here-->
			<div class="menubar">
				<ul id="menu">
					<li><a href=".">Home</a></li>
					<li><a href=".">All Products</a></li>
					<li><a href="signup.html">My Account</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				
				<!--search box starts here-->
				<div id="form">
					<form method="get" action="." enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a product">
						<input type="submit" name="search" value="Search">
					</form>
				</div>
				<!--search box ends here-->
			</div>
			<!--navigation ends here-->
		</div>
		<!--header ends here-->
		
		<!--content wrapper starts here-->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				<ul id="cats">
					<?php getCategs();?>
				</ul>
				
				<div id="sidebar_title">Brands</div>
				<ul id="cats">
					<?php getBrands();?>
				</ul>
			</div>
			
			<div id="content_area">
				<div id='products_box'>
					<?php getProds();?>
				</div>
			</div>

			<div id="footer">
				<h3 style="text-align:center;padding-top:20px;">Powered By: <a title="SDi
				Information Technology." href="http://www.sditech.org.ng/"> <font color="blue">SDi
				&nbsp;- Technology</font></a> &copy &nbsp;- <?php echo date('M, Y');?> All Rights
				Reserved.</font></h3>
			</div>
		</div>
		<!--content wrapper ends here-->
	</div>
	<!-- main container ends here-->
</body>
</html>
