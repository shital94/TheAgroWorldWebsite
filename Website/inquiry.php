<?php


if(isset($_REQUEST['add'])=="inq")
{
	include("connect.php");
	extract($_POST);
	
	mysql_query( "insert into   inquiry_mgmt (name,address,mobile,email,comments) values ('$nm','$addr','$mob','$em','$msg')")or die ("QF");
	header("location:inquiry.php?reg=1");
	
}

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
<link rel="stylesheet" href="css/swipebox.css">
 <!------ Light Box ------>
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>
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
<!-- service -->

	<div class="container">
	<div class="products-section">
		<!-- portfolio-section -->
	 <div class="portfolio"  id="portfolio">
				<form action="" method="post" name="form1" id="form1">
			<input type="hidden" name="add" value="inq">
				<table width="55%" height="450" align="center" bordercolor="#006600"  bgcolor="#FFFFFF"  style="border-style:groove; ">
                  <tr>
                    <td colspan="3"><div align="center">
                        <h1><strong><font color="#333333">Send us your Inqruiry / Feedback </font></strong></h1>
                    </div></td>
                  </tr>
                  <tr>
                    <td width="33%"><div align="left"></div></td>
                    <td width="5%"><div align="left"></div></td>
                    <td width="62%"><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left">&nbsp;&nbsp;&nbsp;Name</div></td>
                    <td><div align="left">:</div></td>
                    <td><div align="left">
                        <input name="nm" type="text" id="nm" require>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left">&nbsp;&nbsp;&nbsp;Address</div></td>
                    <td><div align="left">:</div></td>
                    <td><div align="left">
                        <textarea name="addr" id="addr" require></textarea>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left">&nbsp;&nbsp;&nbsp;Mobile</div></td>
                    <td><div align="left">:</div></td>
                    <td><div align="left">
                        <input name="mob" type="text" id="mob" require>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left">&nbsp;&nbsp;&nbsp;Email</div></td>
                    <td><div align="left">:</div></td>
                    <td><div align="left">
                        <input name="em" type="text" id="em" require>
                    </div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div align="left">&nbsp;&nbsp;&nbsp;Comments / Message </div></td>
                    <td><div align="left">:</div></td>
                    <td><div align="left">
                        <textarea name="msg" id="msg" require></textarea>
                    </div></td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3"><div align="center">
                        <input type="submit" name="Submit" value="Register">
                    </div></td>
                  </tr>
                </table>
				</form>
					<div class="clearfix"></div>
    </div>
	  <!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
<!-- portfolio-section  -->
		
		</div>
</div>
<!-- products -->
<?php if(isset($_REQUEST['reg'])=="1") { ?>
<script language="javascript">
alert("Thanks for your Inquiry");
</script>
<?php } ?>


 

