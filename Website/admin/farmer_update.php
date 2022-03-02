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
	$q=mysql_query("select * from tbl_farmer where f_id=$i")or die("display fail");
	$data=mysql_fetch_array($q);
	$oldfn=$data['f_pic'];
	
if(isset($_REQUEST['up'])=="farmer")
{
	$fn=$_FILES['pic']['name'];
	if($fn=="")
	{
		$fn=$oldfn;
	}
	else
	{
		
		$path="images/";
		$npath=$path.$fn;
	    move_uploaded_file($_FILES['pic']['tmp_name'],$npath);
		unlink($path.$oldfn);
	}
	mysql_query("update tbl_farmer set f_login='$update',password='$pwd',fname='$nm',faddress='$add',pincode='$pin',mobile='$mob',details='$det',email='$em',f_pic='$fn' where f_id=$i") or die(" Update failed");
	header("location:farmer_show.php?fmup=1");
}

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Admin - Welcome To The Agro World</title>
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
    	<h2> Update Farmer </h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form id="form1" name="form1" method="post" enctype="multipart/form-data">
			<input type="hidden"  name="up" value="farmer">	
					
					<input name="update" type="text" id="update"   value="<?php echo $data['f_login'];?>" required="">
					<input name="pwd" type="text" id="pwd"  value="<?php echo $data['password'];?>" required="">
					<input name="nm" type="text" id="nm" placeholder="Name Here" value="<?php echo $data['fname'];?>" required="">
					<input name="add" type="text" id="add" placeholder="Address Here" value="<?php echo $data['faddress'];?>" required="">
					<input name="pin" type="text" id="pin" placeholder="Pincode Here" value="<?php echo $data['pincode'];?>" required="">
					<input name="mob" type="text" id="mob" placeholder="Mobile No Here" value="<?php echo $data['mobile'];?>" required="">
					<input name="det" type="text" id="det" placeholder="Details here" value="<?php echo $data['details'];?>" required="">
					<input name="em" type="text" id="em" placeholder="Email Here" value="<?php echo $data['email'];?>" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Submit" >	
									
					
					
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
