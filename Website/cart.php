<?php
session_start();
$w=$_SESSION['who'];
$g=$_SESSION['gro'];
$u=$_SESSION['use'];
if($u=="" && $w=="" && $g=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
	include("connect.php");
	$i=$_REQUEST['i'];
	
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
				<table width="100%" align="center" style="border-style:groove; border-color:#006633">
              <tr>
                <td colspan="9"><div align="center">
                  <h4><strong>My Cart</strong> </h4>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="5%"><h4>No</h4></td>
                <td width="15%"><h4>Product</h4></td>
                <td width="15%"><h4>Price</h4></td>
                <td width="7%"><h4>Qty</h4></td>
                <td width="9%"><h4>GST</h4></td>
                <td width="15%"><h4>Discount</h4></td>
                <td width="14%"><h4>Net Amount </h4></td>
                <td width="10%"><h4>Purchase Date </h4></td>
                <td width="10%"><h4>Action</h4></td>
              </tr>
               <?php
			  if($_SESSION['who']!="")
				{
					$uu=$_SESSION['who'];
					$q1=mysql_query("select * from  invoice_farmer where uid=$uu ") or die("qf1");
					
				}
				else if($_SESSION['gro']!="")
				{
					$uu=$_SESSION['gro'];
					$q1=mysql_query("select * from   invoice_wholesaler where 	uid=$uu ") or die("qf2");
				}
				else
				{
					$uu=$_SESSION['use'];
					$q1=mysql_query("select * from   invoice_grocerystore where uid=$uu ") or die("qf3");
					
				}
				$no=1;
				while($datab=mysql_fetch_array($q1))
				{
					if($_SESSION['who']!="")
						$ii=$datab['ifid'];
					else if($_SESSION['gro']!="")
						$ii=$datab['iwid'];
					else	
						$ii=$datab['igid'];
		   		?>
			  <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $datab['mc_name']." - ".$datab['sc_name'] ;?></td>
                <td><?php echo $datab['rate'];?></td>
                <td><?php echo $datab['qty'];?></td>
                <td><?php echo $datab['gst'];?></td>
                <td><?php echo $datab['discount	'];?></td>
                <td><?php echo $datab['net_amount'];?></td>
                <td><?php echo $datab['date'];?></td>
                <td><a href="del_cart.php?did=<?php echo $ii;?>">Delete</a></td>
			  </tr>
			  <?php
		  		$no++;
				 }
				 ?>
            </table>
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
<?php if(isset($_REQUEST['ctdel'])=="1") { ?>
<script language="javascript">
alert("Cart Deleted");
</script>
<?php } ?>