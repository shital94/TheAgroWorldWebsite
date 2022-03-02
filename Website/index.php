 <?php 
 session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Agro World</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<!-- header -->
	<div class="banner">
		<div class="container">
			<?php include("menu.php");?>			
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				<?php include("logo.php");?>
		</div>
	</div>
<!-- header -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-6 welcome-left">
				<h1>The Agro World!</h1>
				 
				<p align="justify">The Agro World system provides its users and researches to get online information about the crops, statistical details and increase products. Our Project (The Agro World) has been developed on PHP and MySQL. The Agro World System which will allow formal and informal Farmers, Wholesalers and Vendors to purchase and sell their products on the internet.</p>
				<a class="more" href="about.php">Read More</a>
			</div>
				<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
							<!-- FlexSlider -->
							<div class="col-md-6 welcome-right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/1.jpg" class="img-responsive" alt="" />	
						</li>
						<li>
							<img src="images/2.jpg" class="img-responsive" alt="" />
						</li>
						<li>	
							<img src="images/3.jpg" class="img-responsive" alt="" />
						</li>
					</ul>
				</div>
			</section>
			</div>	
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- welcome -->
<!-- generation -->
	<div class="generation">
		<div class="container">
			<div class="col-md-8 generation-left">
				<h2>FARMER  -  WHOLESALER  -  GROCERY STORE  </h2>
				 
				<p align="justify">For the concept of ‘DIGITAL INDIA’ it is necessary to purchase or sell products online. So that website provides online shopping for users. It also has concept of “SUB-DOMAIN”. Using these concepts, Multiple Manufacturer and Multiple Sellers are connected with website...</p>
				 
				 
					<div class="clearfix"> </div>
				 
				 
					<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 generate-rig">
				<div class="generation-right">
					<h3>latest news</h3>
					<div class="generation-right1">
						<div class="icon1">
							<i class="arw"> </i>
						</div>
						<div class="data1">
							<p>The Agro World - In Digital India we provice 10% discount for purchasing in every products. 
						</div>	
						<div class="clearfix"> </div>
					</div>
					 	
					 	
					 	
					 	
						 
				</div>
				 
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<?php include("footer.php");?>
<!-- generation -->
</body>
</html>
				
