<?php
session_start();
if(isset($_SESSION['who'])=="")
{
	header("location:login.php?m3=3");
	exit(0);	
}
include("connect.php");
$i1=$_SESSION['who'];
$qq=mysql_query("select * from  tbl_wholesaler where w_id=$i1")or die ("Display Fail");
$dataa=mysql_fetch_array($qq);
 

if(isset($_REQUEST['up'])=="pro")
{
	
	extract($_POST);
		 
	$add=nl2br($_REQUEST['add']);
	$add=nl2br($_REQUEST['det']);
	mysql_query("update  tbl_wholesaler  set w_login='$lid',wname='$nm', shop_name='$snm' ,shop_address='$add', pincode='$pin', mobile='$mob', details='$det',email='$em'where w_id=$i1") or die("QF");
	header("location:profile_w.php?p=1");
	
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
				<form action="" method="post" enctype="multipart/form-data" name="form1">
			<input type="hidden" name="up" value="pro">
		      <table width="50%" align="center"  style="border-style:groove"bgcolor="#728c2f" bordercolor="#006600">
                <tr>
                  <td width="30%">Login ID </td>
                  <td width="3%">:</td>
                  <td width="67%"><input name="lid" type="text" id="lid" value="<?php echo $dataa['w_login'];?>" readonly=""></td>
                </tr>
                <tr>
                  <td height="26" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="26">Name</td>
                  <td>:</td>
                  <td><input name="nm" type="text" id="nm" value="<?php echo $dataa['wname'];?>"></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>Shop Name </td>
                  <td>:</td>
                  <td><input name="snm" type="text" id="snm" value="<?php echo $dataa['shop_name'];?>"></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>Shop Address	</td>
                  <td>:</td>
                  <td><textarea name="add" id="add"><?php echo $dataa['shop_address'];?></textarea></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td> Pincode	</td>
                  <td>:</td>
                  <td><input name="pin" type="text" id="pin"  value="<?php echo $dataa['pincode'];?>"></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>Mobile</td>
                  <td>:</td>
                  <td><input name="mob" type="text" id="mob" value="<?php echo $dataa['mobile'];?>"></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td> Details	</td>
                  <td>:</td>
                  <td><textarea name="det" id="det"><?php echo $dataa['details'];?></textarea></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><input name="em" type="text" id="em" value="<?php echo $dataa['email'];?>"></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><input type="submit" name="Submit" value="Update"></td>
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