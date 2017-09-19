<?php

session_start();

if($_SESSION['login_user'])
{
	$username=$_SESSION['login_user'];
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
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">perkjet143@gmail.com</a></li>
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


<!-- banner -->
	<div class="banner">


	<div class="banner-right">
					<ul id="flexiselDemo2">
						<li><div class="banner-grid">
						<h2>Koiseggneigg</h2>
						<div class="wome">
								<a href="single.php" ><img class="img-responsive" src="images/bi1.jpg" alt="" />
								</a>
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.php">Agera R</a></h6>
									<p class="ba-price"><del>$1.7 million</del><em class="item_price">$1.5 million</em></p>
									<a href="#" data-text="Check Out!" class="but-hover1 item_add">Buy right now!</a>
								</div>
								</div>
							</div></li>
						<li><div class="banner-grid">
						<h2>Maruti</h2>
						<div class="wome">
								<a href="single.php" ><img class="img-responsive" src="images/maruti.jpeg" alt="" />
								</a>
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.php">Swift Dzire</a></h6>
									<p class="ba-price"><del>Rs. 9.39L</del><em class="item_price">Rs. 5.39L</em></p>
									<a href="#" data-text="Check Out!" class="but-hover1 item_add">Buy right now!</a>
								</div>
								</div>
							</div></li>
						<li><div class="banner-grid">
						<h2>Honda</h2>
						<div class="wome">
								<a href="single.php" ><img class="img-responsive" src="images/honda.jpg" alt="" />
								</a>
								<div class="women simpleCart_shelfItem">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6 ><a href="single.php">Livo</a></h6>
									<p class="ba-price"><del>Rs. 70k</del><em class="item_price">Rs. 55k</em></p>
									<a href="#" data-text="Check Out!" class="but-hover1 item_add">Buy right now!</a>
								</div>
								</div>
							</div></li>


					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 5000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 1
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 1
		    		}
		    	}
		    });

		});
	</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>

					</div>


				</div>

	</div>
<!-- //banner -->
<!--content-->
		<div class="content">
		<div class="content-head">

					<div class="col-md-6 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-1">
						<div class="col-md-6 col-2">
							<br>
							<a href="single.php"><img src="images/show.jpg" class="img-responsive" alt="">
							</a></div>
							<div class="col-md-6 col-p">
								<h5>Latest Arrivals</h5>
								<p>You will find all first arrivals from every mega companies
									here, at reasonable prices. Be the first one to grab those & win exciting goodies!!
								</p>
								<a href="single.php" class="shop" data-hover="Shop Now">Shop Now</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-1">
						<div class="col-md-6 col-p">
								<h5>For All Categories</h5>
								<p>Browse every category and every vehicle, within a matter of
									seconds. Join our customer community and help us to build the finest
								vehicle providers</p>
								<a href="single.php" class="shop" data-hover="Shop Now">Shop Now</a>
							</div>
						<div class="col-md-6 col-2">
							<a href="single.php"><img src="images/first.jpg" class="img-responsive" alt="">
							</a></div>
							<div class="clearfix"> </div>
						</div>
						</div>
          <br>
					<div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">

						<!---->
						 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 2,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel" style="background-color:white">
					                <div>

											<a href="single.php"><img width="300px" height="180px"  src="images/gixer.jpg" alt="" /></a>
											<a href="single.php" class="shop-2" >Shop Now</a>

					                </div>
									<div>

											<a href="single.php"><img width="270px" height="180px" src="images/aprila.jpg" alt="" /></a>
											<a href="single.php" class="shop-2">Shop Now</a>

					                </div>

									<div>

											<a href="single.php"><img width="300px" height="180px" src="images/gixer.jpg" alt="" /></a>
											<a href="single.php" class="shop-2">Shop Now</a>

					                </div>
									<div>

											<a href="single.php"><img width="270px" height="180px" src="images/aprila.jpg" alt="" /></a>
											<a href="single.php" class="shop-2">Shop Now</a>

					                </div>
							</div>
					   </div>
					   <div class="clearfix"></div>
			</div>
					</div>

			<!---->

				<div class="content-top">
					<div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-3">
							<a href="single.php"><img src="images/tesla.jpg" class="img-responsive " alt="">
							<div class="col-pic">
								<br><br>
								<h5>4-Wheeler Range</h5>
								<p>A class of 4 : Royale</p>
							</div></a>
						</div>

					</div>
					<div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/gmc1.jpeg" width="350px" height="100px"  alt="">
											</div>
											<div class="grid-img">
												<img  src="images/gmc2.jpg" width="350px" height="100px"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Sierra Denali</a></h6>
									<p ><del>$50k</del><em class="item_price">$40k</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy now!</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/mer1.png" width="400px" height="100px"  alt="">
											</div>
											<div class="grid-img">
												<img  src="images/mer2.jpg" width="100px" height="100px"   alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">AMG GT Coupe</a></h6>
									<p ><del>$115k</del><em class="item_price">$112k</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
						<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/maruti1.jpg" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/maruti2.jpg" width="350px" height="100px"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">SX</a></h6>
									<p ><del>$10k</del><em class="item_price">$7k</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!----->
				<!---->
				<div class="content-top">

					<div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/vp1.png" width="200px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/vp2.jpg" width="350px" height="100px" alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Sei Giorni</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>

						</div>

						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/hd1.jpg" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/hd2.jpg" width="350px" height="100px"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Street 500</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
						<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/hero1.jpg" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/hero2.jpg" width="350px" height="150px" alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Glamour FI</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
						<div class="col-3">
							<a href="single.php"><img src="images/general.jpg" class="img-responsive " alt="">
							<div class="col-pic">
								<h5>2-Wheeler Range</h5>
								<p>A class cut above: Casual</p>
							</div></a>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>


				<!--products-->
<div class="social animated wow fadeInDown" data-wow-delay=".1s">
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
						<li><i class="glyphicon glyphicon-map-marker" ></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">info@example.com</a></li>
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
				<p>&copy 2016 Classic Style. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>
