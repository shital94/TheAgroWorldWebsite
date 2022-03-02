<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}
include("connect.php");
$i=$_SESSION['abc'];
$qa=mysql_query("select * from tbl_farmer where f_id=$i") or die ("Query Fail");
$dataa=mysql_fetch_array($qa);

if(isset($_REQUEST['change'])=="true")
{
	extract($_POST);
	$old_pwd=$dataa['password'];
	if($old_pwd==$cpwd)
	{
		mysql_query("update tbl_farmer set password='$npwd' where f_id=$i")or die ("Query Failed1");
		header("location:logout.php");
	}	
	else
	{
		header("location:change_password.php?m=1");
	}
}

?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Farmer - Welcome To The Agro World</title>
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
    	<h2>Change Password</h2>
    	<div class="blankpage-main">
    		 <div class="inbox-details-body">
    		 <div class="login-block">
				<form id="form1" name="form1" method="post" onSubmit="return fun1();">
			      <p>
			        <input type="hidden"  name="change" value="true">	
		          </p>
			      <p>
			        <input name="lid" type="text" id="lid" placeholder="Login ID" value="<?php echo $dataa['f_login']; ?>" readonly="">
			        <input name="cpwd" type="password" id="cpwd" placeholder="Current Password" >
			        <input name="npwd" type="password" id="npwd" placeholder="New Password" >
			        <input name="rpwd" type="password" id="rpwd" placeholder="Confirm Password" onBlur="return fun2();" >
		          </p>
			      <div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								
							</ul>
						</div>
						
						<div class="clearfix"> </div>
				  </div>
					<input type="submit" name="Sign In" value="Change" >	
									
					
					
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


                      
						
<script language="javascript">
function fun1()
{

	if(form1.cpwd.value=="")
	{
		alert("Enter current password");
		form1.cpwd.focus();
		return false;
	}
	else if(form1.npwd.value=="")
	{
		alert("Enter new password");
		form1.npwd.focus();
		return false;
	}
	else if(form1.rpwd.value=="")
	{
		alert("Enter Confirm password");
		form1.rpwd.focus();
		return false;
	}
}
function fun2()
{
	alert("njmbj");
	if(form1.npwd.value!=form1.rpwd.value)
	{
		alert("New and Confirm password not match");
		form1.npwd.value='';
		form1.rpwd.value='';
		form1.npwd.focus();
		return false;
	}
}

</script>
<?php if(isset($_REQUEST['m'])=="1") {?>
<script language="javascript">
alert("User id or password is incorrect");
</script>
<?php }?>