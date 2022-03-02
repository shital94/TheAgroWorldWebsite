<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
include("connect.php");
$ii=$_SESSION['abc'];
$qq=mysql_query("select * from  tbl_farmer where f_id=$ii")or die ("QF");
$dataa=mysql_fetch_array($qq);
?>
<?php

if(isset($_REQUEST['save'])=="true")
{
	
	extract($_POST);
	$add=nl2br($_REQUEST['add']);
	
	 
	
	mysql_query("update  tbl_farmer  set fname='$nm', faddress='$add', pincode='$pin', mobile='$mob', details='$det',email='$em'  where f_id=$ii") or die("QF");
	header("location:profile.php?p=1");
	
}

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Farmer - Welcome To The Agro World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="The Agro, Agro, Farm, Farmer, Wholesaler, Grocerystore, Grains, Vegetables, Fruits" />
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
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
   
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
<style type="text/css">
<!--
.style1 {color: #339933}
-->
</style>
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
<!--market updates updates-->
	 
<!--market updates end here-->
<!--mainpage chit-chating-->

<!--main page chit chating end here-->
<!--main page chart start here-->

<!--main page chart layer2-->


<!--climate start here-->
<div class="climate">
	<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
			<input type="hidden" name="save" value="true">
				<table width="50%"  style="border-style:groove" align="center" bgcolor="#CC99CC">
  <tr>
    <td colspan="3"><h3 align="center" class="style1">Fill Up Profile Details: </h3></td>
    </tr>
  <tr>
    <td width="29%">Login ID </td>
    <td width="4%">:</td>
    <td width="67%"><input name="lid" type="text" id="lid" value="<?php echo $dataa['f_login'];?>" readonly=""></td>
  </tr>
  <tr>
    <td> Name	</td>
    <td>:</td>
    <td><input name="nm" type="text" id="nm" value="<?php echo $dataa['fname'];?>"></td>
  </tr>
  <tr>
    <td> Address	</td>
    <td>:</td>
    <td><textarea name="add" id="add"><?php echo $dataa['faddress'];?></textarea></td>
  </tr>
  <tr>
    <td> Pincode	</td>
    <td>:</td>
    <td><input name="pin" type="text" id="pin" value="<?php echo $dataa['pincode'];?>"></td>
  </tr>
  <tr>
    <td> Mobile	</td>
    <td>:</td>
    <td><input name="mob" type="text" id="mob" value="<?php echo $dataa['mobile'];?>"></td>
  </tr>
  <tr>
    <td> Details	</td>
    <td>:</td>
    <td><textarea name="det" id="det"><?php echo $dataa['details'];?></textarea></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input name="em" type="text" id="em" value="<?php echo $dataa['email'];?>"></td>
  </tr>
  <tr>
    <td><input type="reset" name="Submit2" value="Reset"></td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit"></td>
  </tr>
</table>

			</form>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;		  </p>
	
	<div class="col-md-4 climate-grids">
		<div class="climate-grid3">
			
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
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
<?php if(isset($_REQUEST['p'])=="1") { ?>
<script language="javascript">
alert("Profile saved");
</script>
<?php } ?>