<?php

session_start();

    if($_SESSION['login_user'])
    {
        $username = $_SESSION['login_user'];
    }
   $connect = mysqli_connect("localhost","root","","vsm") or die("can't connect");
   if(isset($_GET['error']))
   {
   	echo "<div class='alert alert-danger' role='alert'><strong>".$_GET['error']."</strong> Change a few things up and try submitting again.</div>";
   }
   if(isset($_GET['success']))
   {
     echo "<div class='alert alert-success' role='alert'><strong>".$_GET['success']."</strong> Details Submitted.</div>";
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Perkjet Online Showroom</title>
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
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>

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
					<li><i class="glyphicon glyphicon-logout" ></i><a href="logout.php">logout</a></li>
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
						<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="tata.php">Perk<span>Jet</span></a></h1>
					</div>

				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="tata.php" class="act">Home</a></li>
						<!-- Mega Menu -->
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">root</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="master.php">Admin's Arena</a></h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
			<div class="col-md-3"><br><br><br><br><br><h2><strong>Contacts</strong></h2><br><br><br><br><br><br><br><br><br><br><br><h2><strong>Affiliated Company</strong></h2><br><br><br><br>
      <br><br><br><br><h2><br><br><br><strong>Maintenance Hours</strong></h2></div>
      <div class="col-md-9 bs-example wow fadeInUp animated" data-wow-delay=".5s" data-example-id="contextual-table" style="border: 1px solid #eee">
        <form method="post" action="delcon.php">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
      		      <th>Action Taken</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($connect,"SELECT * FROM contacts");
                    $numrow = mysqli_num_rows($query);

                 		if($numrow!=0)
                 		{
                 			while($row = mysqli_fetch_assoc($query))
                 			{

                           echo "<tr>
                                     <th>".$row['id']."</th>
                                     <td>".$row['name']."</td>
                                     <td>".$row['email']."</td>
                                     <td>".$row['message']."</td>
                		                 <td><center>
                                     <input name='actbox' type='checkbox' value=".$row['id']."/></center></td>";
                              echo  "</tr>";
                     }
                   }
               ?>
            </tbody>
          </table>
  					<input class="hvr-sweep-to-top login-sub" type="submit" value="UPDATE">
      </form>
      <br><br><br><br>
      <form method="post" action="affcom.php">
  				<div class="login-mail">
  					<input type="text" placeholder="Username" name="username" required="">
  					<i class="glyphicon glyphicon-user"></i>
  				</div>
  				<div class="login-mail">
  					<input type="password" placeholder="Password" name="password" required="">
  					<i class="glyphicon glyphicon-lock"></i>
  				</div>
  				<div class="login-mail">
  					<input type="text" pattern="[7-9]{1}[0-9]{9}" placeholder="Contact no." name="phone" required="">
  					<i class="glyphicon glyphicon-earphone"></i>
  				</div>
          <div class="login-mail">
  					<input type="text" placeholder="Address" name="address" required="">
  					<i class="glyphicon glyphicon-globe"></i>
  				</div>

  				<input class="hvr-sweep-to-top login-sub" type="submit" value="ADD Company">
  			<div class="clearfix"> </div>
  			</form>
         <br><br><br><br>
           <center><h3><strong>Start Maintenance Hours for the Website</strong></h3>
           <br>
           <button type="button" class="btn btn-lg btn-danger">Start Maintenance</button></center>
           <br><br><br>
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
</body>
</html>
