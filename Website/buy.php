<?php
session_start();
$w=$_SESSION['who'];
$g=$_SESSION['gro'];
$u=$_SESSION['use'];
include("connect.php");
	$i=$_REQUEST['i'];

if($u=="" && $w=="" && $g=="")
{
	header("location:login.php?m3=3");
	exit(0);	
}
if($_SESSION['who']!="")
{
	$uu=$_SESSION['who'];
	$q1=mysql_query("select * from    tbl_products_farmer where pfid=$i") or die("qf11");
	$datab=mysql_fetch_array($q1);
	$q2=mysql_query("select * from   tbl_wholesaler where w_id=$uu") or die("qf2");
	$data2=mysql_fetch_array($q2);
	$path="farmer/prod_img_f/";
	$nm=$data2['wname'];
}
else if($_SESSION['gro']!="")
{
	$uu=$_SESSION['gro'];
	$q1=mysql_query("select * from   tbl_products_wholesaler where pwid=$i") or die("qf22");
	$datab=mysql_fetch_array($q1);
	$q2=mysql_query("select * from   tbl_grocerystore where g_id=$uu") or die("qf2");
	$data2=mysql_fetch_array($q2);
	$path="wholesaler/prod_img_w/";
	$nm=$data2['gname'];
}
else
{
	$uu=$_SESSION['use'];
	$q1=mysql_query("select * from   tbl_products_grocerystore where pgtid=$i") or die("qf33");
	$datab=mysql_fetch_array($q1);
	$q2=mysql_query("select * from   tbl_user where u_id=$uu") or die("qf2");
	$data2=mysql_fetch_array($q2);
	$path="grocery_store/prod_img_g/";
	$nm=$data2['uname'];
}

if(isset($_REQUEST['s'])=="t")
{
	$m=$datab['mc_name'];
	$sc=$datab['sc_name'];
	$d=$datab['date'];
	$w=$datab['weight_type'];
	extract($_POST);
	
	if($_SESSION['who']!="")
	{
	$n=$data2['wholeseller_name'];

	$w=$_SESSION['who'];
	mysql_query( "insert into invoice_farmer (mc_name,sc_name,wholeseller_name,date,qty,rate,weight_type,gst,net_amount,uid) values ('$m','$sc','$n','$d','$qty','$pr','$w','$gst','$namt','$w')")or die("QFF");
	}
	
	if($_SESSION['gro']!="")
	{
	$n=$data2['grocerystore_name'];
		  
	mysql_query("insert into invoice_wholesaler (mc_name,sc_name,grocerystore_name,date,qty,rate,weight_type,gst,net_amount,uid) values ('$m','$sc','$n','$d','$qty','$pr','$w','$gst','$namt','$g')") or die("Insert failed2");
	}
	
	if($_SESSION['use']!="")
	{
	$n=$data2['uname'];
		 
	mysql_query("insert into invoice_grocerystore (mc_name,sc_name,uname,date,qty,rate,weight_type,gst,net_amount,uid) values ('$m','$sc','$n','$d','$qty','$pr','$w','$gst','$namt','$u')") or die("Insert failed3");
	}
	
	header("location:cart.php?c=$i");
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
				<form name="form2" method="post" action="" id="form2">
			<input type="hidden" name="s" value="t">
				<table width="53%"  style="border-style:groove; border-color:#000000;" align="center" >
                  <tr>
                    <td colspan="3"><div align="center"><strong>Buy Product Details </strong></div></td>
                  </tr>
                  <tr>
                    <td width="28%">&nbsp;&nbsp;Product</td>
                    <td width="4%">:</td>
                    <td width="68%"><?php echo $datab['sc_name']; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Rate</td>
                    <td>:</td>
                    <td><label>
                      <input name="pr" type="text" id="pr" value="<?php echo $datab['rate']; ?>" readonly="">
                    </label></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Weight Type </td>
                    <td>:</td>
                    <td><?php echo $datab['weight_type']; ?></td>
                  </tr>
                  <tr>
                    <td> &nbsp;&nbsp;Pic1</td>
                    <td>:</td>
                    <td><img src="<?php echo $path.$datab['pic1'];  ?>" height="100" width="100"></td>
                  </tr>
                  <tr>
                    <td> &nbsp;&nbsp;Pic2 </td>
                    <td>:</td>
                    <td><img src="<?php echo $path.$datab['pic2']; ?>"  height="100" width="100"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Pic3</td>
                    <td>:</td>
                    <td><img src="<?php echo $path.$datab['pic3'];  ?>" height="100" width="100" ></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;User Name </td>
                    <td>:</td>
                    <td><?php echo $nm; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Enter Qty. </td>
                    <td>:</td>
                    <td><input name="qty" type="text" id="qty" onBlur="return calc();"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;GST</td>
                    <td>:</td>
                    <td><input name="gst" type="text" id="gst" readonly="" onBlur="return calc();">
                      12%</td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Discount</td>
                    <td>:</td>
                    <td><input type="text" name="textfield" id="dis" readonly="">
                      10% </td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;Net Amount </td>
                    <td>:</td>
                    <td><input name="namt" type="text" id="namt" readonly=""></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><input type="reset" name="Reset" value="Reset"></td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit2" value="Buy"></td>
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
<?php include("footer.php");?>
</body>
</html>
<script language="javascript" >
function calc()
{
	var p=parseInt(form2.pr.value);
	var q=parseInt(form2.qty.value);
	var g=(p*q)*0.12;
	var d=(p*q)*0.10;
	var n=((p*q)+g)-d;
	form2.gst.value=g;
	form2.dis.value=d;
	form2.namt.value=n;
	

}
</script>