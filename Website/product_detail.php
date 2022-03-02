<?php session_start();
include("connect.php");
$p=$_REQUEST['p'];
$s=$_REQUEST['s'];
if($_SESSION['who']!="")
{
 
	$qp=mysql_query("select * from  tbl_products_farmer where mc_name='$p' and sc_name='$s' order by pfid")or die ("QF prod1");
	$path="farmer/prod_img_f/";

	
}
else if($_SESSION['gro']!="")
{
	$qp=mysql_query("select * from  tbl_products_wholesaler where mc_name='$p' and sc_name='$s' order by pwid")or die ("QF prod2");
	$path="wholesaler/prod_img_w/";
}
else
{
	$qp=mysql_query("select * from   tbl_products_grocerystore where mc_name='$p' and sc_name='$s' order by pgtid")or die ("QF prod3");
	$path="grocery_store/prod_img_g/";
}
?><!DOCTYPE HTML>
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
				<?php
		  
		 
		 
		 while($datap=mysql_fetch_array($qp))
		 {
		 ?>
		   <table width="80%"  style="border-style:groove; border-color:#000000;"align="center">
  <tr>
    <td colspan="3"><div align="center"><?php echo $datap['mc_name'];?> -- <?php echo $datap['sc_name'];?></div></td>
    </tr>
  <tr>
    <td width="33%"><img src="<?php echo $path.$datap['pic1'];?>" width="81%" height="150" class="img-responsive"></td>
    <td width="34%"><img src="<?php echo $path.$datap['pic2'];?>" width="78%" height="150" class="img-responsive"></td>
    <td width="33%"><img src="<?php echo $path.$datap['pic3'];?>" width="87%" height="150" class="img-responsive"></td>
  </tr>
  <tr>
    <td colspan="3" align="center">Rs : <?php echo $datap['rate'];?> /- <?php echo $datap['weight_type'];?> </td>
    </tr>
  <tr>
    <td colspan="3"><?php echo $datap['description'];?></td>
    </tr>
  <tr>
  <?php
  	if($_SESSION['who']!="")
	{
		$i=$datap['pfid'];
	}
	else if($_SESSION['gro']!="")
	{
		$i=$datap['pwid'];
	}
	else
	{
		$i=$datap['pgtid'];
	}
  ?>
    <td colspan="3" align="right"><a href="buy.php?i=<?php echo $i;?>">Buy Now</a></td>
  </tr>
</table>
			<hr>
		<?php
		}
		?>
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