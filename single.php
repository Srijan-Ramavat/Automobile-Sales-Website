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

						<li><?php echo $username; ?></li>
						<li><i class="glyphicon glyphicon-logout" ></i><a href="logout.php">Logout</a></li>
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

							<li><a href="contact.html">Contact Us</a></li>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Single</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.php">Home</a><label>/</label>Single</h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
	<div class="product">
		<div class="container">
					<div class="col-md-3 product-bottom">
		<!--categories-->
		<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
				<h3>Categories</h3>
				<ul class="cate">
					<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Best Selling</a> <span>(15)</span></li>
					<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">2-Wheeler</a> <span>(16)</span></li>
						<ul>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Accessories</a> <span>(2)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Street</a> <span>(5)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Mountain</a> <span>(1)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Hybrid</a> <span>(0)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">BMX</a> <span>(1)</span></li>
						</ul>
					<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products1.php">Sales</a> <span>(15)</span></li>
					<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">4-Wheeler</a> <span>(15)</span></li>
						<ul>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Accessories</a> <span>(2)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Hatchbacks</a> <span>(0)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Sedan</a> <span>(1)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">MUV</a> <span>(0)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Convertible</a> <span>(4)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Hybrid</a> <span>(2)</span></li>
							<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.php">Coupe</a> <span>(10)</span></li>
						</ul>
				</ul>
			</div>
			<!--//colors-->
			<div class="sellers animated wow fadeInDown" data-wow-delay=".5s">

								<h3 class="best">BEST SELLERS</h3>
					<div class="product-head">
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.php"><img class="img-responsive " src="images/gmc1.jpeg" alt=""></a>

								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.php">Sierra Dinali </a></h6>
								<span class=" price-in1"> <del>$50.00</del>$40.00</span>
								<p>The standard chunk of Lorem Ipsum used</p>
							</div>

							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.php"><img class="img-responsive " src="images/gixer.jpg" alt=""></a>

								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.php">Gixxer SF</a></h6>
								<span class=" price-in1"> <del>$50.00</del>$40.00</span>
								<p>The standard chunk of Lorem Ipsum used</p>
							</div>
							<div class="clearfix"> </div>
							</div>

							</div>
				</div>
				<!---->
 	</div>
			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="col-md-5 grid-im">
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/hd3.jpg">
			        <div class="thumb-image"> <img src="images/hd3.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/hd4.jpg">
			         <div class="thumb-image"> <img src="images/hd4.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/hd5.jpg">
			       <div class="thumb-image"> <img src="images/hd5.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			  </ul>
		</div>
	</div>
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>Harley Davidson 2017 Street 500</h3>
				<p class="in-para"> There are many variations of passages of Harley Davidson.</p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$69,999.00</span>
				 <a href="purchase.php" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
				 <div class="clearfix"></div>
				</div>



			<div class="clearfix"> </div>
			</div>
		   <!----- tabs-box ---->
		<div class="sap_tabs">
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clearfix"></div>
						  </ul>
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p > There are many variations of Harley Davidson available: </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>
							        </div>

							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts1">

						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>


			 </div>

								</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h6><a href="#">Angaar Boyz</a> - September 3, 2017</h6>

									<p>Angaaaar!</p>
				</div>
				<div class="clearfix"> </div>
				<a class="add-re" href="single.php">Add Review</a>
			</div>


							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
<!---->
					</div>

</div>
<!----->
<div class="clearfix"> </div>
<div class=" col-md-si">
						<div class="col-sm-4 item-grid simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>
										<a href="single.php">
											<div class="grid-img">
												<img  src="images/bi1.jpg" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/bi2.jpeg" width="350px" height="100px"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Agera R</a></h6>
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
												<img  src="images/tes1.jpg" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/tes2.jpg" width="350px" height="100px"  alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">Model S</a></h6>
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
												<img  src="images/mer1.png" width="350px" height="100px" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/mer2.jpg" width="350px" height="100px" alt="">
											</div>
										</a>
									</figure>
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.php">AMG GT Coupe</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Check it!" class="but-hover1 item_add">Buy Now!</a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
		</div>
			</div class="clearfix"></div>
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
		<a href="contact.html">Contact Us</a>
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
