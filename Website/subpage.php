<?php session_start(); ?>
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
	     		<a href="details.html"><img src="images/about_pic.jpg" class="img-responsive" alt="" /></a>
	     	</div>
	       <div class="col-md-7 cont-grid">
	       <div class="abt-para">
	       	<h4>Lorem Ipsum is simply dummy text.</h4>
	       	<p class="para top">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
	       	<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			<a class="more" href="#">Read More</a>
	       	</div>
	      	 <div class="clearfix"></div>
	      	</div>
	      	 <div class="clearfix"></div>
	    	<div class="about-p">
		    	<p class="para top">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
				<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit</p>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				<a class="more" href="#">Read More</a>
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
				
