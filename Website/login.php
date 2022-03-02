<?php
session_start();
include("connect.php");
if(isset($_REQUEST['login'])=="true")
{
	extract($_POST);
	if($type=="w")
	{
		$q=mysql_query("select * from   tbl_wholesaler where w_login='$lid' and password='$pw'") or die("Query Fail");
		if(mysql_num_rows($q))
		{
			$data=mysql_fetch_array($q);
			$_SESSION['who']=$data['w_id'];
			header("location:profile_w.php");
		}
		else 
		{
			header("location:login.php?m=1");
		}
	}
	elseif($type=="g")
	{
		$q=mysql_query("select * from tbl_grocerystore where g_login='$lid' and password='$pw'") or die("QF");
		if(mysql_num_rows($q))
		{
			$data=mysql_fetch_array($q);
			$_SESSION['gro']=$data['g_id'];
			header("location:profile_g.php");
		}
		else
		{
			header("location:login.php?m=1");
		}
	}
	elseif($type=="u")
	{
		$q=mysql_query("select * from tbl_user where u_login='$lid' and password='$pw'") or die("QF");
		if(mysql_num_rows($q))
		{
			$data=mysql_fetch_array($q);
			$_SESSION['use']=$data['u_id'];
			header("location:profile_u.php");
		}
		else
		{
			header("location:login.php?m=1");
		}
	}	
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
				<form name="form1" method="post" action="">
			  <p>
			    <input type="hidden" name="login" value="true">
		      </p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <table width="50%" align="center"  style="border-style:groove"bgcolor="#728c2f" bordercolor="#006600"  >
                <tr>
                 <h1> <td height="59" colspan="3" align="center"><h1><strong><font color="#FFFFFF"> Login Form </font> </strong></h1></td>
                 </h1>
                </tr>
                <tr>
                  <td height="70"><div align="center">Login As </div></td>
                  <td>:</td>
                  <td><label>
                    <input name="type" type="radio" value="w">
                  </label>
                  Wholesaler 
                  <label>
                  <input name="type" type="radio" value="g">
                  </label>
                  Grocery Store 
                  
                  <input name="type" type="radio" value="u">
                  User
                  </td>
                </tr>
                <tr>
                  <td width="33%" height="70"><div align="center" class="style2">ID</div></td>
                  <td width="2%">:</td>
                  <td width="65%"><input name="lid" type="text" id="lid"></td>
                </tr>
				
                <tr>
                  <td height="81"><div align="center" class="style2">Password</div></td>
                  <td>:</td>
                  <td><input name="pw" type="password" id="pw"></td>
                </tr>
                <tr>
                  <td height="81" colspan="3" align="center"><input type="submit" name="Submit" value="Login"></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
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
<?php include("footer.php");?>
</body>
</html>
<?php if(isset($_REQUEST['m'])=="1") { ?>
<script language="javascript">
alert("Enter Correct Value");
</script>
<?php } ?>

<?php if(isset($_REQUEST['m2'])=="2") { ?>
<script language="javascript">
alert("Logout Successfully");
</script>
<?php } ?>

<?php if(isset($_REQUEST['m3'])=="3") { ?>
<script language="javascript">
alert("Please Login To Access");
</script>
<?php } ?>
