<?php
session_start();
if(isset($_SESSION['use'])=="")
{
	header("location:login.php?m3=3");
	exit(0);	
}
include("connect.php");
$ii=$_SESSION['use'];
$qq=mysql_query("select * from  tbl_user where u_id=$ii")or die ("QF");
$dataa=mysql_fetch_array($qq);
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
				<form name="form1" method="post" action="">
		      <table width="50%" height="500" align="center" bordercolor="#006600"bgcolor="#728c2f"  style="border-style:groove">
                <tr>
                  <td colspan="3"><p>&nbsp;</p>
                    <h2 align="center" class="style3">User Profile</h2></td>
                </tr>
                
                <tr>
                  <td width="43%"><div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Login ID </div>
                  </div></td>
                  <td width="7%"><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td width="50%"><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['u_login'];?></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td><div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Name</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['uname'];?></div>
                  </div></td>
                </tr>
				
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td> <div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Address	</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['uaddress'];?></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td><div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Pincode	</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['pincode'];?></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td><div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Mobile</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['mobile'];?></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td> <div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Details	</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['details'];?></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left"><span class="style3"></span></div></td>
                </tr>
                <tr>
                  <td> <div align="center" class="style3">
                    <div align="left">&nbsp;&nbsp;&nbsp;Email	</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left">:</div>
                  </div></td>
                  <td><div align="center" class="style3">
                    <div align="left"><?php echo $dataa['email'];?></div>
                  </div></td>
                </tr>
				
                <tr>
                  <td colspan="3" align="center"><span class="style3"></span></td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><span class="style3"></span></td>
                </tr>
                <tr>
                  <td colspan="3" align="center">&nbsp;</td>
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
<?php if(isset($_REQUEST['p'])=="1") { ?>
<script language="javascript">
alert("Profile Updated");
</script>
<?php } ?>