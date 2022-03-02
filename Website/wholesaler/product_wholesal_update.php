<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
	include("connect.php");
	extract($_POST);
	$i=$_REQUEST['uid'];
	$q1=mysql_query("select * from  tbl_products_wholesaler where pwid=$i")or die("display fail");
	$data1=mysql_fetch_array($q1);
	$oldfn=$data1['pic1'];
	$oldfn=$data1['pic2'];
	$oldfn=$data1['pic3'];
	
if(isset($_REQUEST['up'])=="wf")
{
	 
	mysql_query("update  tbl_products_wholesaler set qty='$qt', rate='$rt', weight_type='$wt', date='$dt', description='$des' where pwid=$i") or die(" Update failed");
	header("location:product_wholesal_show.php?pwup=1");
}

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Wholesaler - Welcome To The Agro World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The Agro, Agro, Farm, Farmer, Wholesaler, Grocerystore, Grains, Vegetables, Fruits" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
						<?php include("logo.php") ?>	
							<!--search-box-->
								<!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<?php include("top_menu.php");?>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2 align="center"> Update Product Wholesaler </h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form id="form1" name="form1" method="post" enctype="multipart/form-data">
				<input type="hidden" name="up" value="wf">
				
				<table width="75%" border="1" align="center">
  <tr>
    <td width="53%">Quantity</td>
    <td width="5%">:</td>
    <td width="42%"><input name="qt" type="text" id="qt" value="<?php echo $data1['qty']; ?>"></td>
  </tr>
  <tr>
    <td> Rate	</td>
    <td>:</td>
    <td><input name="rt" type="text" id="rt" value="<?php echo $data1['rate']; ?>"></td>
  </tr>
  <tr>
    <td>Weight Type </td>
    <td>:</td>
    <td><input name="wt" type="text" id="wt" value="<?php echo $data1['weight_type']; ?>"></td>
  </tr>
  <tr>
    <td> Date	</td>
    <td>:</td>
    <td><input name="dt" type="text" id="dt" value="<?php echo $data1['date']; ?>"></td>
  </tr>
  <tr>
    <td> Description	</td>
    <td>:</td>
    <td><input name="des" type="text" id="des" value="<?php echo $data1['description']; ?>"></td>
  </tr>
  <tr>
    <td> Pic1</td>
    <td>:</td>
    <td><img src="prod_img_w/<?php echo $data1['pic1']; ?>" width="100" height="100"></td>
  </tr>
  <tr>
    <td> Pic2	</td>
    <td>:</td>
    <td><img src="prod_img_w/<?php echo $data1['pic2']; ?>" width="100" height="100"></td>
  </tr>
  <tr>
    <td> Pic3</td>
    <td>:</td>
    <td><img src="prod_img_w/<?php echo $data1['pic3']; ?>" width="100" height="100"></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
</table>

			    <input type="submit" name="Submit" value="Update">
			    <div class="forgot-top-grids">
			  <div class="clearfix"> </div>
				  </div>
				</form>
				
			</div>
   		     </div>
    		<p>&nbsp;</p>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include("copyrights.php") ?>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <?php include("menu.php");?>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

</script>
