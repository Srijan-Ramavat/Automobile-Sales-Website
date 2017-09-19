<?php

session_start();
$connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");

if($_SESSION['login_user'])
{
	$username=$_SESSION['login_user'];

	$query = mysqli_query($connect,"SELECT * FROM customer WHERE username='$username'");
	$numrow = mysqli_num_rows($query);
	 if($numrow!=0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $db_username = $row['username'];
			 $db_phone = $row['phone'];
		 }
	 }
	 if ($db_username==$username) {
		 $phone = $db_phone;
	 }
}
if(isset($_GET['error']))
{
  echo "<div class='alert alert-danger' role='alert'><strong>".$_GET['error']."</strong> Change a few things up and try submitting again.</div>";
}
if(isset($_GET['success']))
{
  echo "<div class='alert alert-success' role='alert'><strong>".$_GET['success']."</strong> Data has been Updated.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PerkJet Online Showroom</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<link rel="css/flip.css" href="/css/master.css">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:srijan.ramavat@gmail.com">perkjet143@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>

					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
                        <li><a href="#"><?php echo $username; ?></a></li>
						<li><i class="glyphicon glyphicon-log-out" ></i><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">

					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left ">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.php">Perk<span>Jet</span></a></h1>
						</div>

					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Home</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">4 Wheelers <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Companies</h6>

												<li><a href="products.php">Rolls Royce </a></li>
												<li><a href="products.php">BMW </a></li>
												<li><a href="products.php">Jaguar </a></li>
                        <li><a href="products.php">Mercedes-Benz </a></li>
												<li><a href="products.php">Audi </a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Types</h6>
												<li><a href="products.php">Hatchback</a></li>
												<li><a href="products.php">Sedans</a></li>
												<li><a href="products.php">MUV</a></li>
												<li><a href="products.php">Convertible</a></li>
												<li><a href="products.php">Hybrid</a></li>
												<li><a href="products.php">Coupe</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Price Range</h6>
												<li><a href="products.php">20 lakhs - 50 lakhs</a></li>
												<li><a href="products.php">50 lakhs - 1 Cr</a></li>
												<li><a href="products.php">Above 1 Cr</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products.php"><img src="images/me.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products.php"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">2 wheelers <b class="caret"></b></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Companies</h6>

												<li><a href="products1.php">Herley Davidson </a></li>
												<li><a href="products1.php">Royal Enfield </a></li>
												<li><a href="products1.php">Honda </a></li>
												<li><a href="products1.php">Kawasaki </a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Types</h6>
												<li><a href="products1.php">Street</a></li>
												<li><a href="products1.php">Mountain</a></li>
												<li><a href="products1.php">Hybrid</a></li>
												<li><a href="products1.php">BMX</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Price</h6>
												<li><a href="products1.php">40 Thousand - 1 Lakhs</a></li>
												<li><a href="products1.php">1 lakhs - 5 lakhs</a></li>
												<li><a href="products1.php">5 lakhs and Above</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products1.php"><img src="images/me2.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products1.php"><img src="images/me3.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>

		</div>
	</div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Purchase Vehicle</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.php">Home</a><label>/</label>Automobile<label>/</label>Purchase</h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->

  <!-- contact -->
  	<div class="purchase">
  		<div class="container">
  			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
  						<div class="contact-form2">
  						</div>
              <div class="grid-pro">
  						<div class="grid-product">
  							<h4>Login Details</h4>
              </div>
  						<div class="contact-form2">
  							<h4><br>Name:<strong> <?php echo $username;?></strong><br>Contact:<strong> <?php echo $phone;?></strong></h4>
  						</div>
            </div>

          <form method="post" action="updateadd.php">
  				  <div class="contact-me "><hr>
  					  <h4><br>Address</h4>
  						<textarea rows="3" type="text" name="address"  placeholder="" required=""> </textarea>
  			   	</div>
  						<input type="submit" name="update" value="Update Address" >
  				</form>
          <div class="contact-me ">
            <h4>Product Details</h4>
            <div class="grid-pro">
              <div  class=" grid-product " >
                <figure>
                    <div class="grid-img">
                      <img  src="images/hd1.jpg" class="img-responsive" alt="">
                    </div>
                </figure>
              </div>
              <div class="women">

                <h6>Harley Davidson 2017 Street 500</h6>
                <p ><em class="item_price">$69,999.00</em></p>

              </div>
            </div>
          </div>
          <form method="post" action="cth.php">
          <div class="grid-pro">
            <div class="grid-product" >
                <input type="radio" name="pay" value="online">Pay Online<br>
                <input type="radio" name="pay" value="emi">Pay by EMI<br>
                <input type="radio" name="pay" value="exec">Pay to Executives<br><br>
            </div>
          </div>
          <input type="submit" name="submit" value="Pay Now" >
        </form>

  			</div>

  			<div class="col-md-4 contact-grids">
  				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
  					<div class="contact-grid1">
  						<div class="contact-grid2 ">
  							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
  						</div>
  						<div class="contact-grid3">
  							<h4>Address</h4>
  							<p>204 Rodriguez Villa, Kamani, Kurla (W) <span>Mumbai.</span></p>
  						</div>
  					</div>
  				</div>
  				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
  					<div class="contact-grid1">
  						<div class="contact-grid2 contact-grid4">
  							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
  						</div>
  						<div class="contact-grid3">
  							<h4>Call Us</h4>
  							<p>+1234 758 839<span>+1273 748 730</span></p>
  						</div>
  					</div>
  				</div>
  				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
  					<div class="contact-grid1">
  						<div class="contact-grid2 contact-grid5">
  							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
  						</div>
  						<div class="contact-grid3">
  							<h4>Email</h4>
  							<p><a href="contactto:info@example.com">perkjet143@gmail.com</a></p>
  						</div>
  					</div>
  				</div>

  			</div>
  		</div>
  	</div>



  <!--//products-->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
	<div class="container">
		<div class="col-sm-3 social-ic">
			<a href="#">FACEBOOK</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">TWITTER</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">GOOGLE+</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">PINTEREST</a>
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		<h4>The vehicles we own, tell a lot about us!</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.Excepteur sint occaecat cupidatat
						non proident Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
		</div>
		<div class="col-md-3 footer-top2">
		<a href="contact.php">Contact Us</a>
		</div>
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>204, Rodriguez Villa, Kamani, Kurla(W) <span>Mumbai.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">perkjet143@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
				<h3>Sign up for newsletter </h3>
				<form>
					<input type="text" placeholder="Email"  required="">
					<input type="submit" value="Submit">
				</form>

				</div>

				<div class="clearfix"> </div>
			</div>

			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 7X. All rights reserved | Design by <a href="#">Team Angaar</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

</body>
</html>
