<?php session_start(); ?><!DOCTYPE HTML>
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
	<div class="banner1">
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
<!-- about -->
<div class="main_bg">
<div class="container">
<div class="main">
	 
		<div class="about">
			 <div class="col-md-5 cont-grid-img img_style">
	     		<a href="details.html"><img src="images/1.jpg" class="img-responsive" alt="" /></a>
	     	</div>
	       <div class="col-md-7 cont-grid">
	       <div class="abt-para">
	       	<h4>The Agro World</h4>
	       	<p class="para top">The Agro World system provides its users and researches to get online information about the crops, statistical details and increase products. Our Project (The Agro World) has been developed on PHP and MySQL. The Agro World System which will allow formal and informal Farmers, Wholesalers and Vendors to purchase and sell their products on the internet. </p>
	       	<p class="para">For the concept of ‘DIGITAL INDIA’ it is necessary to purchase or sell products online. So that website provides online shopping for users. It also has concept of “SUB-DOMAIN”. Using these concepts, Multiple Manufacturer and Multiple Sellers are connected with website..</p>
			 
	       	</div>
	      	  
		</div>
		 <div class="clearfix"></div>
	</div>
</div>
</div>
<!-- about -->
	 <?php include("footer.php");?>
</body>
</html>
				
